<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Portfolio;
use App\Service_provider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/ads';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        DB::beginTransaction();
        try {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'mobile' => $data['mobile'],
                'user_type' => $data['type'],
                'password' => Hash::make($data['password']),
            ]);

            $profile =  Input::file('profile_img');
            $portfolios = Input::file('portfolio_img');
            if($profile){
                $proOriName = $profile->getClientOriginalName();
                $proImgName = time() . '-' . $proOriName;
                Storage::disk('public')->put( $proImgName,File::get($profile));
            }else{
                $proImgName = 'empty';
            }
            if($data['type']==0){
                
                $serviceProvider =  Service_provider::create([
                    'u_id'=>$user->id,
                    'location'=>$data['location'],
                    'proficient_type'=>$data['proficient_type'],
                    'category'=>$data['category'],
                    'profile_img'=>$proImgName,
                    'description'=>$data['description']
                ]);
                if($portfolios){
                    foreach($portfolios as $portfolio){
                        $portOriName =  $portfolio->getClientOriginalName();            
                        $portImgName = time() . '-' . $portOriName;    
                        Storage::disk('public')->put( $portImgName,File::get($portfolio));
                    
                        Portfolio::create([
                            's_id'=> $serviceProvider->id,
                            'portfolio_img'=>(($portImgName) ? $portImgName:'empty')
                        ]);
                    }
                }
            }

                DB::commit();    // Commiting  ==> There is no problem whatsoever
                session()->flash('message', 'You have Successfully Post Your Ad!!'); 
                return $user;
                // return redirect('/ads')->with('message', 'Registered successfully, please login...!');
        } catch (\Exception $e) {
            DB::rollback();   // rollbacking  ==> Something went wrong
            return 'false';
        }
    }
}
