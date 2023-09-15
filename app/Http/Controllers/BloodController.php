<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blood;
use App\Models\Member_details;

class BloodController extends Controller
{
    public function bloodcreate(Request $request)
   {
    try
        {
                $blood=Blood::get();
                $result=$request->blood;
                $search=Member_details::with('blood')->where('blood_group',$result)->get();

                return view('blood_search.create',['blood'=>$blood,'search'=>$search]);
        }
    catch(Exception $e)
    {
                return $e->getMassage();
    }
   }
}
