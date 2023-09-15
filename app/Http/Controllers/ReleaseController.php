<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House_registration;
use App\Models\Release_registration;
use App\Models\Member_details;

class ReleaseController extends Controller
{
    public function create()
    { 
        try{
        $house=House_registration::where('status',0)->get();
        // return 'ok';
        return view('mahallu_release_registration.create',['house'=>$house]);
        }
        catch(Exception $e)
        {
            return $e->getMassage();
        }
    }
    public function index()
    {
        try{
             $release=Release_registration::get();
            return view('mahallu_release_registration.view',['release'=>$release]);
        }
        catch(Exception $e)
        {
            return $e->getMassage();
        }
    }
    public function get_release(Request $request)
    {
        $id=$request->id;
         $member_details=House_registration::where('id',$id)->first();
         return response()->json($member_details);
    }
    public function releasesave(Request $request)
    { 
        try{
        $release= new Release_registration;
        $release->house_id=$request->house_id;
        $release->house_holder_name=$request->house_holder_name;
        $release->address=$request->address;
        $release->date=$request->release_date;
        $release->save();
        $id=$request->house_id;
        $deactive=House_registration::where('id',$id)->first();
        $deactive->status=1;
        $deactive->save();
        Member_details::where('house_id', $id)
        ->update(['status' =>0]);
        return redirect('release/view');
        }
        catch(Exception $e)
        {
            return $e->getMassage();
        }
    }
    

}
