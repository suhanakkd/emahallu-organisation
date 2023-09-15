<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account_ledger;
use App\Models\Accounts_subgroup;
use App\Models\Payment;
use App\Models\Reciept;
use DB;
class AccountController extends Controller
{
    //
    public function addledger(){
      
        try{

        
        $subgroup=Accounts_subgroup::get();
        return view('account.addledger',['subgroup'=>$subgroup]);
    }
    catch (Exception $e){
        return $e->getMessage();
    }
        }                                                                                                                    
        public function ledgerstore(Request $request){
            try{

            // return $request->all();
            
                        $add=New Account_ledger;
                        $add->sub_group_id=$request->sub_group_id;
                        $add->name=$request->name;
                         $add->save();
                        return redirect('ledgerview');
                    }
                    catch (Exception $e){
                        return $e->getMessage();
                    }
                    }
                        public function  ledgerview(){
                            try{
                            $ledger= Account_ledger::with('subgroup')->get();
                            return view('account.ledgerview',['ledger'=> $ledger]);
                            
                    }
                    catch (Exception $e){
                        return $e->getMessage();
                    }
                            }
                   
                    // public function view(){
                    //     $details= Member_details::with('housename','blood')->get();
                    //     return view('member_registration.view',['details'=>$details]);
                    //     }




    public function payment(){
        return view('account.payment');
        }
        

        public function paymentstore(Request $request){
            try{
            // return $request->all();
            
                        $add=New Payment;
                        $add->No=$request->number;
                        $add->paid_to=$request->paid_to;
                        $add->amount=$request->amount;
                        $add->date=$request->date;
                        $add->reciever=0;
                        $add->balance=0;
                        $add->mode=$request->mode;
                        $add->description=$request->description;
                        $add->save();
                        return redirect('ledgerview');
                    }
                    catch (Exception $e){
                        return $e->getMessage();
                    }
                    }
                    public function  paymentview(){
                        try{
                        $payment= Payment::get();
                        return view('account.paymentview',['payment'=> $payment]);
                    }
                    catch (Exception $e){
                        return $e->getMessage();
                    }
                        }


                        
                  
    public function reciept(){
        return view('account.reciept');
        }

        
        public function recieptstore(Request $request){
            try{
            // return $request->all();
            
            $add=New Reciept;
            $add->reciept_no=$request->reciept_no;
            $add->recieved_from=$request->recieved_from;
            $add->amount=$request->amount;
            $add->date=$request->date;
            $add->reciever=0;
            $add->balance=0;
            $add->recieved_from=$request->recieved_from;
            $add->mode=$request->mode;
            $add->description=$request->description;
            $add->save();
                        return redirect('ledgerview');

                    }
                    catch (Exception $e){
                        return $e->getMessage();
                    }
                    }
                    public function  recieptview(){
                        try{
                        // with('subgroup')->
                        $reciept= Reciept::get();
                        return view('account.Recieptview',['reciept'=> $reciept]);
                    }
                    catch (Exception $e){
                        return $e->getMessage();
                    }
                        }

       
}
