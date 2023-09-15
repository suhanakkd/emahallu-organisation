<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member_details;
use App\Models\House_registration;
use App\Models\Blood;
class MemberController extends Controller
{
    //
    public function create(){
        $blood=Blood::get();
        $house= House_registration::where('status',0)->get();
        return view('member_registration.create',['house'=>$house,'blood'=>$blood]);
        }
  
    public function store(Request $request){

            // return $request->all();
                        $add=New Member_details;
                        $add->house_id=$request->house_id;
                        $add->name=$request->name;
                        $add->designation=$request->designation;
                        $add->age=$request->age;
                        $add->gender=$request->gender;
                        $add->contact_number=$request->phone_number;
                        $add->image=$request->photo;
                        $add->blood_group=$request->blood_group;
                        $add->desease=$request->diseases;
                        $add->educational_details=$request->education;
                        $add->job=$request->job;
                        $add->marital_status=$request->married_status;
                        $add->status=1;
                        $add->save();
                        // to incriment count in house registration table
                        $house_id=$request->house_id;
                        $count=House_registration::where('id',$house_id)->first();
                        $count->total_members= $count->total_members+1;
                        $count->save();
                        return redirect('member/view');
                    }
                    public function view(){
                        $details= Member_details::get();
                        return view('member_registration.view',['details'=>$details]);
                        }
            
                        public function edit($id){
                            $edit= Member_details::find($id);
                            return view('member_registration.edit',['edit'=>$edit]);
                            }
            
//                     public function updatedetails(Request $request){
            
//                         // return $request->all();
            
//                         $add= House_registration::find($request->id);
//                         $add->house_id=$request->house_id;
//                         $add->family_name=$request->family_name;
//                         $add->house_holder_name=$request->holder_name;
//                         $add->address=$request->address;
//                         $add->house_number=$request->house_number;
//                         $add->ward=$request->ward;
//                         $add->panchayat=$request->panchayat;
//                         $add->pincode=$request->pincode;
//                         $add->total_members=$request->tottal_members;
//                         $add->annual_income=$request->annual_income;
//                         $add->monthly_payment=$request->monthly_payment;
//                         $add->save();
//                         return redirect('house/view');
//                                 }
            
//              public function delete($id)
//             {
//                 $data=House_registration::find($id);
//                 $data->delete();
//                 return redirect('house/view');
//             }
 }

