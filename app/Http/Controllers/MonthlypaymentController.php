<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monthly_payment;
use App\Models\House_registration;
use App\Models\Month;
use DB;
class MonthlypaymentController extends Controller
{
    //
    public function payment()
    {
        try{
            
            $house=House_registration::get();
            $month=Month::get();
        return view('monthlypayment.create',[
        'house'=>$house,'month'=>$month]);
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }
}
public function getmembers(Request $request)
{
    $id=$request->id;
     $register=House_registration::where('id',$id)->first();
     return response()->json($register);
}
public function paymentstore(Request $request)
{  
  
    // $data = request()->validate([
    //     'name' => 'required'
    // ]);
    
    try{
        //    return $request->all();
   
    // return 'ok';
   
      DB::transaction (function () use($request)  {
    $data=new Monthly_payment;
   $data->house_id=$request->house_id;
   $data->month_id=$request->month_id;
   $data->year=$request->year;
   $data->date=$request->date;
   $data->members=$request->members;
   $amount=$request->amount*$request->members;
   $data->amount=$amount;
    $data->save();
    // 
 });
    return redirect('monthlypayment');
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }
}
public function payment_index()
    {
        try{
      $data=Monthly_payment::with('house','month')->get();
      
        
      return view('monthlypayment.index',['data'=>$data]);
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }
}


}
