<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\House_registration;
use App\Models\Member_details;
use App\Models\Birth_registration;
class BirthController extends Controller
{
    public function create()
    {
        $house=House_registration::get();
        return view('birth_registration.create',['house'=>$house]);
    }
    public function birthstore(Request $request)
    {
        try
            {
                DB::transaction(function () use($request)
                {
                    $birth=new Birth_registration;
                    $birth->house_id=$request->house_id;
                    $birth->child_name=$request->baby_name;
                    $birth->date_of_birth=$request->dob;
                    $birth->gender=$request->flexRadioDefault;
                    $birth->blood_group=$request->blood;
                    $birth->decease=$request->desease;
                    $birth->place_of_birth=$request->place_of_birth;
                    $birth->father_name=$request->father_name;
                    $birth->mother_name=$request->mother_name;
                    $birth->save();
                    $member=New Member_details;
                    $member->house_id=$request->house_id;
                    $member->name=$request->baby_name;
                    $member->gender=$request->flexRadioDefault;
                    if($request->flexRadioDefault=='female')
                    $member->designation='duaghter';
                    else
                    $member->designation='son';
                    $member->age=0;
                    $member->contact_number='nil';
                    $member->image='nil';
                    $member->blood_group=$request->blood;
                    $member->desease=$request->desease;
                    $member->educational_details='nil';
                    $member->job='nil';
                    $member->marital_status='unmarried';
                    $member->status=1;
                    $member->save();
                      // to incriment count in house registration table
                      $house_id=$request->house_id;
                      $count=House_registration::where('id',$house_id)->first();
                      $count->total_members= $count->total_members+1;
                      $count->save();
                });
                return redirect('birth/view');

            }
        catch(Exception $e)
            {
                return $e->getMassage();
            }
    }
    public function index()
    {
        $birth=Birth_registration::with('house')->get();
        return view('birth_registration.view',['birth'=>$birth]);
    }
}
