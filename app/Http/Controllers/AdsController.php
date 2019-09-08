<?php

namespace App\Http\Controllers;
use DB;
use App\Ads;
use App\Service_provider;
use App\Location;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Portfolio;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all();

        $ads =Service_provider::leftjoin('users', 'users.id', '=', 'service_providers.u_id')
            ->leftjoin('locations', 'locations.id', '=', 'service_providers.location')
            ->select(['users.*','service_providers.category','locations.location','service_providers.proficient_type','service_providers.profile_img','service_providers.description'])
            ->paginate(4); 
// dd($ads);
        return view('ads.index',compact('ads','locations'));
    }

    public function postAdIndex()
    {
        $locations = Location::all();
        return view('postads.posturads',compact('locations'));
    }

    protected function postAd(Request $data)
    {
        DB::beginTransaction();
        try {
            $user = Auth::user();
            
            User::where('id', $user->id)
            ->update(['user_type' => '0']);

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
                return redirect('/ads')->with('message', 'Ad posted successfully..!');
        } catch (\Exception $e) {
            DB::rollback();   // rollbacking  ==> Something went wrong
            return $e;
        }
    }

    public function search(Request $request)
    {
        $locations = Location::all();
        $location =$request->location;
        $profession = $request->category;
        $text = $request->text;
        
        $ads =Service_provider::leftjoin('users', 'users.id', '=', 'service_providers.u_id')
            ->leftjoin('locations', 'locations.id', '=', 'service_providers.location')
            ->Where('service_providers.location', 'LIKE', "$location%")
            ->Where('service_providers.proficient_type', 'LIKE', "$profession%")
            ->Where('users.name', 'LIKE', "$text%")
            ->select(['users.*','service_providers.category','locations.location','service_providers.proficient_type','service_providers.profile_img','service_providers.description'])
            ->paginate(4); 
        
        return view('ads.index',compact('ads','locations'));
    }
    
   

    public function filterRating(Request $request)
    {
        $locations = Location::all();
        $post = Service_provider::all();
        $rate =$request->rate;
        $emptyAdsRates =Service_provider::join('users', 'users.id', '=', 'service_providers.u_id')
            ->leftjoin('ratings', 'ratings.rateable_id', '=', 'service_providers.u_id')
            ->select('users.id',DB::raw('SUM(ratings.rating)/COUNT(ratings.rateable_id) as rating'),'ratings.rateable_id as rate_id')            
            ->orderBy(DB::raw('SUM(ratings.rating)/COUNT(ratings.rateable_id)'), 'asc')
            ->groupBy('users.id','ratings.rateable_id')
            ->whereNull('rating')
            ->get()
            ->toArray();  

        $avaiAdsRates =Service_provider::join('users', 'users.id', '=', 'service_providers.u_id')
            ->leftjoin('ratings', 'ratings.rateable_id', '=', 'service_providers.u_id')
            ->select('users.id',DB::raw('SUM(ratings.rating)/COUNT(ratings.rateable_id) as rating'),'ratings.rateable_id as rate_id')            
            ->orderBy(DB::raw('SUM(ratings.rating)/COUNT(ratings.rateable_id)'), 'asc')
            ->groupBy('users.id','ratings.rateable_id')
            ->havingRaw( 'rating <='. $rate)
            ->get()
            ->toArray();  

        $adsRates = array_merge($emptyAdsRates,$avaiAdsRates); 
        foreach($adsRates as $adsRate){

                $ads[]=Service_provider::leftjoin('users', 'users.id', '=', 'service_providers.u_id')
                    ->leftjoin('locations', 'locations.id', '=', 'service_providers.location')
                    ->where('users.id','=',$adsRate['id'])
                    ->get(['users.*','service_providers.u_id as rate_id','service_providers.category','locations.location','service_providers.proficient_type','service_providers.profile_img','service_providers.description'])
                    ->first();  
  
                
        }
        $ads = array_reverse($ads,true);
        return view('ads.search',compact('ads','locations'));
    }
    public function singleIndex($id)
    {

        $ad = Service_provider::leftjoin('users', 'users.id', '=', 'service_providers.u_id')
            ->leftjoin('locations', 'locations.id', '=', 'service_providers.location')
            ->leftjoin('portfolio', 'portfolio.s_id', '=', 'service_providers.id')
            ->where('users.id',$id)
            ->get(['users.*','locations.location','service_providers.proficient_type','service_providers.profile_img','service_providers.description','service_providers.category','portfolio.portfolio_img'])
            ->first();

        $adImgs = Service_provider::leftjoin('users', 'users.id', '=', 'service_providers.u_id')
            ->leftjoin('locations', 'locations.id', '=', 'service_providers.location')
            ->leftjoin('portfolio', 'portfolio.s_id', '=', 'service_providers.id')
            ->where('users.id',$id)
            ->get(['portfolio.portfolio_img']);    
         
        return view('ads.single',compact('ad','adImgs'));
    }

    // review submit
    public function postPost(Request $request)

    {

        request()->validate(['rate' => 'required']);

        $post = Service_provider::find($request->id);


        $rating = new \willvincent\Rateable\Rating;

        $rating->rating = $request->rate;

        $rating->user_id = auth()->user()->id;

        $post->ratings()->save($rating);


        return redirect()->route("ads");

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // step 1 : validate data from form
        $this -> validate($request, array(
            'registername' => 'required|max:255',
        ));

        // step 2 : save data to the database
        $reg = new Register;
        $reg->name = $request->registername;
        $reg->save();

        // step 3 : redirect web pages
        $data = Catagory::all();
        return view('passwords.register')->with('data',$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function show(Ads $s_id)
    {
        $data = Catagory::find($s_id);
        return view('register.show')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit(Ads $ads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ads $ads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ads $ads)
    {
        //
    }
}
