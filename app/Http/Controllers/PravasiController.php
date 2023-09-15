<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House_registration;
use App\Models\Pravasi_registration;
use App\Models\Member_details;
class PravasiController extends Controller
{
    public function create()
    { 
        try{
        $house=House_registration::where('status',0)->get();
        // return 'ok';
        return view('pravasi_registration.create',['house'=>$house]);
        }
        catch(Exception $e)
        {
            return $e->getMassage();
        }
    }
    public function view()
    {
        try{
            $pravasi=Pravasi_registration::with('member')->get();
            return view('pravasi_registration.view',['pravasi'=>$pravasi]);
        }
        catch(Exception $e)
        {
            return $e->getMassage();
        }
    }
    public function pravasisave(Request $request)
    { 
        try{
        $pravasi= new Pravasi_registration;
        $pravasi->house_id=$request->house_id;
        $pravasi->member_id=$request->member_id;
        $pravasi->country=$request->country;
        $pravasi->status=1;
        $pravasi->save();
        return redirect('pravasi/view');
        }
        catch(Exception $e)
        {
            return $e->getMassage();
        }
    }
    public function active($id)
    {
        try{
        
            $pravasi=Pravasi_registration::find($id);
            $pravasi->status=0;
            $pravasi->save();
      return back();
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }
}
public function deactive($id)
{
    try{
    
        $pravasi=Pravasi_registration::find($id);
        $pravasi->status=1;
        $pravasi->save();
  return back();
}
catch (Exception  $e) {
    // Do something with your exception
    return $e->getMassage();
}
}

}
