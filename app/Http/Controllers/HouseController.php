<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House_registration;
use App\Models\Member_details;
class HouseController extends Controller
{
    //
    public function create(){
        return view('house_registration.create');
        }


        public function store(Request $request){

    //    return $request->all();

            $add=New House_registration;
            $add->house_id=$request->house_id;
            $add->parent_id=0;
            $add->family_name=$request->family_name;
            $add->house_holder_name=$request->holder_name;
            $add->address=$request->address;
            $add->house_number=$request->house_number;
            $add->ward=$request->ward;
            $add->panchayat=$request->panchayat;
            $add->pincode=$request->pincode;
            $add->total_members=0;
            $add->annual_income=$request->annual_income;
            $add->monthly_payment=$request->monthly_payment;
            $add->status=0;
            $add->save();
            return redirect('house/view');
        }


        public function view(){
            $details= House_registration::with('member')->get();
            return view('house_registration.view',['details'=>$details]);
            }

            public function edit($id){
                $edit= House_registration::find($id);
                return view('house_registration.edit',['edit'=>$edit]);
                }

        public function updatedetails(Request $request){

            // return $request->all();

            $add= House_registration::find($request->id);
            $add->house_id=$request->house_id;
            $add->parent_id=$request->parent_id;
            $add->family_name=$request->family_name;
            $add->house_holder_name=$request->holder_name;
            $add->address=$request->address;
            $add->house_number=$request->house_number;
            $add->ward=$request->ward;
            $add->panchayat=$request->panchayat;
            $add->pincode=$request->pincode;
            $add->total_members=$request->tottal_members;
            $add->annual_income=$request->annual_income;
            $add->monthly_payment=$request->monthly_payment;
            $add->save();
            return redirect('house/view');
                    }

 public function delete($id)
{
    $data=House_registration::find($id);
    $data->delete();
    return redirect('house/view');
}
// add house
public function houseadd($id){
    $member=Member_details::where('house_id',$id)->get();
    $edit= House_registration::where('status',0)->find($id);
    return view('house_registration.addhouse',['edit'=> $edit,'member'=>$member]);

    }
    public function houseupdate(Request $request){

        // return $request->all();
        $house=House_registration::find($request->id);
        $add=New House_registration;
        $add->house_id=$request->house_id;
        $add->parent_id=$house->id;
        $add->family_name=$house->family_name;
        $add->house_holder_name=$request->holder_name;
        $add->address=$request->address;
        $add->house_number=$request->house_number;
        $add->ward=$request->ward;
        $add->panchayat=$request->panchayat;
        $add->pincode=$request->pincode;
        $add->total_members=0;
        $add->annual_income=$request->annual_income;
        $add->monthly_payment=$request->monthly_payment;
        $add->status=1;
        $add->save();
        return redirect('house/view');
    }
}

