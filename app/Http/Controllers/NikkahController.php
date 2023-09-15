<?php

namespace App\Http\Controllers;
use App\Models\Nikkah_registration;
use Illuminate\Http\Request;
use App\Models\House_registration;
use App\Models\Member_details;
use DB;
class NikkahController extends Controller
{
    public function create()
    { 
        try
        {
            $house=House_registration::get();
            $member=Member_details::get();
        return view('nikkah_registration.create',['house'=>$house,'member'=>$member]);
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        } 

    }
    public function nikkahstore(Request $request)
    {
    //   return $request->all();
    try
    {
    //  return $request->all();
    $request->validate([
        'Bride_pincode' => 'size:6|integer',
        'groom_pincode' => 'size:6|integer'
    ]);
    DB::transaction(function () use($request) {
        $nikkah=new Nikkah_registration;
        $nikkah->bride_house_id=$request->bride_house_id;
        $nikkah->groom_house_id =$request->groom_house_id;
        $nikkah->groom_member_id=$request->groom_member_id;
        $nikkah->bride_member_id=$request->bride_member_id;
        $nikkah->bride_panchayath=$request->Bride_panchayath;
        $nikkah->groom_panchayath=$request->groom_panchayath;
        $nikkah->bride_pincode =$request->Bride_pincode;
        $nikkah->groom_pincode=$request->groom_pincode;
        $nikkah->bride_mahallu=$request->bride_mahallu;
        $nikkah->groom_mahallu=$request->groom_mahallu;
        $nikkah->bride_name=$request->bride_name;
        $nikkah->groom_name =$request->groom_name;
        $nikkah->bride_adress=$request->bride_address;
        $nikkah->groom_adress=$request->groom_address;
        $nikkah->bride_fathername=$request->bride_father;
        $nikkah->groom_fathername=$request->groom_father;
        $nikkah->marriage_date=$request->nikkah_date;
        $nikkah->save();
    });
    $bride=$request->bride_member_id;
    $groom=$request->groom_member_id;
    if($bride)
    {
        $member=Member_details::find($bride);
        $member->marital_status='married';
        $member->save();
    }
    if($groom)
    {
        $member=Member_details::find($groom);
        $member->marital_status='married';
        $member->save();
    }

     return back();
       
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }
    
}
public function get_member(Request $request)
{
    $id=$request->id;
     $members=Member_details::where('house_id',$id)->get(['id','name as name']);
     return response()->json($members);

}

public function get_groom(Request $request)
{
    $id=$request->id;
     $members=Member_details::where('id',$id)->first();
     return response()->json($members);

}
public function groom_details(Request $request)
{
    $id=$request->id;
     $member_details=House_registration::where('id',$id)->first();
     return response()->json($member_details);
}
public function get_bride(Request $request)
{
    $id=$request->id;
     $members=Member_details::where('id',$id)->first();
     return response()->json($members);

}
public function bride_details(Request $request)
{
    $id=$request->id;
     $member_details=House_registration::where('id',$id)->first();
     return response()->json($member_details);
}

public function view()
{ 
    try
    {
        $nikkah=Nikkah_registration::get();
    return view('nikkah_registration.index',['nikkah'=>$nikkah]);
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    } 


}

public function autocomplete(Request $request)

{

    $data = House_registration::select("house_id as value", "id")

                ->where('house_id', 'LIKE', '%'. $request->get('search'). '%')

                ->get();



    return response()->json($data);

}



}