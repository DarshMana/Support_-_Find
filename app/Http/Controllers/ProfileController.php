<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Portfolio;

use App\User;
use App\Location;
use App\Service_provider;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentUserType=Auth::user()->user_type;
        $locations = Location::all();
        if($currentUserType==0){
            $userDetails = Service_provider::leftjoin('users', 'users.id', '=', 'service_providers.u_id')
                ->leftjoin('locations', 'locations.id', '=', 'service_providers.location')
                ->leftjoin('portfolio', 'portfolio.s_id', '=', 'service_providers.id')
                ->where('users.id',auth()->id())
                ->get(['users.*','locations.location as locationName','service_providers.proficient_type','service_providers.profile_img','service_providers.description','service_providers.category','portfolio.portfolio_img'])
                ->first();

            $adImgs = Service_provider::leftjoin('users', 'users.id', '=', 'service_providers.u_id')
                ->leftjoin('locations', 'locations.id', '=', 'service_providers.location')
                ->leftjoin('portfolio', 'portfolio.s_id', '=', 'service_providers.id')
                ->where('users.id',auth()->id())
                ->get(['portfolio.portfolio_img']);


        }else{
            $userDetails = User::where('users.id',auth()->id())
            ->get(['users.*'])->first();
        }

            return view('profileupdate.profile',compact(['userDetails','locations']));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        DB::beginTransaction();
        try {
            $serviceProvider = Service_provider::where('u_id', $req->id)->get()->first();

            $updateService = Service_provider::where('u_id', $req->id)
            // ->update(request()->all());
            ->update(array(
                'location' => $req->location,
                'proficient_type' => $req->proficient_type,
                'category' => $req->category,
                'profile_img' => $req->profile_img,
                'description' => $req->description,
            ));
            Portfolio::where('id', $serviceProvider->id)
                ->update(array(
                    'portfolio_img' => $req->portfolio_img,
                ));
            DB::commit();    // Commiting  ==> There is no problem whatsoever

            return Redirect::back()->with('message','Successfully Updated !');

        } catch (\Exception $e) {
            DB::rollback();   // rollbacking  ==> Something went wrong
            // return $e;
            return Redirect::back()->with('message','Update Fail !');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req)
    {

    }
}
