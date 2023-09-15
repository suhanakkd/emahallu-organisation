<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Member_details;
use App\Models\House_registration;
use App\Models\Death_registration;
class DeathController extends Controller
{
   public function create()
   {
    try
        {
                $house=House_registration::get();
                $member=Member_details::get();
                return view('death_registration.create',['house'=>$house,'member'=>$member]);
        }
    catch(Exception $e)
    {
                return $e->getMassage();
    }
   }

   public function deathstore(Request $request)
   {
    try
        {
            DB::transaction(function () use($request) {
                $death=new Death_registration;
                $death->house_id=$request->house_id;
                $death->member_id=$request->member_id;
                $death->furnel_place=$request->funeral_place;
                $death->death_reason=$request->death_reason;
                $death->date=$request->death_date;
                $death->save();
            });
                $member=$request->member_id;
                $deathupdate=Member_details::find($member);
                $deathupdate->status=2;
                $deathupdate->save();
                $house_id=$request->house_id;
                $count=House_registration::where('id',$house_id)->first();
                $count->total_members= $count->total_members-1;
                $count->save();
                return back();
         }

    catch(Exception $e)
        {
            return $e->getMassage();
        }
    }
    public function index()
        {
            $death=Death_registration::with('member')->get();
            return view('death_registration.view',['death'=>$death]);
        }
    
}
