<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commity_period;
use App\Models\Commity_creation;
use App\Models\Commity_position;
use App\Models\Member_details;
use App\Models\Commity_member_details;
use App\Models\House_registration;
use App\Models\Commity_meeting;
use App\Models\Commity_event;
use App\Models\Meeting_report;
use DB;

class CommitteeController extends Controller
{
    //
    public function period()
    {
        try{
    
        return view('committee-period.create');
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }


    }
    public function periodstore(Request $request)
    {  
      
        // $data = request()->validate([
        //     'name' => 'required'
        // ]);
        
        try{
            //    return $request->all();
       
        // return 'ok';
       
          DB::transaction (function () use($request)  {
        $data=new Commity_period;
       $data->period_time=$request->name;
       
        $data->save();
        // 
     });
        return redirect('period_index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function period_index()
    {
        try{
      $data=Commity_period::get();
      
        
      return view('committee-period.index',['data'=>$data]);
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }


    
}
public function period_edit($id)
    {
        try{
            
            $data=Commity_period::find($id);
            return view('committee-period.edit',['editdata'=>$data  ] );
          
        
    }
    catch (Exception  $e) {
        // Do something with your exception

        return $e->getMassage();
    }

    }
    public function period_update(Request $request)
    {
        // $data = request()->validate([
        //     'name' => 'required'
        // ]);
        try{
            //return $request->all();
            DB::transaction (function () use($request){
            $data=Commity_period::find($request->id);
            $data->period_time=$request->name;
             $data->save();
             
});

             
return redirect('period_index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function period_destroy($id)
    {
        try{
            $data=Commity_period::find($id);
            $data->delete();
            return redirect('period_index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function creation()
    {
        try{
            $period=Commity_period::get();
        return view('committee-creation.create',['period'=>$period]);
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }


    }
    public function creationstore(Request $request)
    {  
      
        // $data = request()->validate([
        //     'name' => 'required'
        // ]);
        
        try{
            //    return $request->all();
       
        // return 'ok';
       
          DB::transaction (function () use($request)  {
        $data=new Commity_creation;
       $data->peroid_id=$request->period_id;
       $data->name=$request->name;
       $data->total_members=$request->members;
       $data->discription=$request->description;
        $data->save();
        // 
     });
        return redirect('creation');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function creation_index()
    {
        try{
      $data=Commity_creation::with('period')->get();
      
        
      return view('committee-creation.index',['data'=>$data]);
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }


    
}
public function creation_edit($id)
    {
        try{
            $period=Commity_period::get();
            $data=Commity_creation::find($id);
            return view('committee-creation.edit',['editdata'=>$data,'period'=>$period  ] );
          
        
    }
    catch (Exception  $e) {
        // Do something with your exception

        return $e->getMassage();
    }

    }
    public function creation_update(Request $request)
    {
        // $data = request()->validate([
        //     'name' => 'required'
        // ]);
        try{
            //return $request->all();
            DB::transaction (function () use($request){
            $data=Commity_creation::find($request->id);
            $data->peroid_id=$request->period_id;
            $data->name=$request->name;
            $data->total_members=$request->members;
            $data->discription=$request->description;
             $data->save();
             
});

             
return redirect('creation_index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function creation_destroy($id)
    {
        try{
            $data=Commity_creation::find($id);
            $data->delete();
            return redirect('creation_index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function members()
    {
        try{
            $period=Commity_period::get();
            $creation=Commity_creation::get();
            $position=Commity_position::get();
            $member=Member_details::get();
            $house=House_registration::get();
            
        return view('committee-members.create',['period'=>$period,'creation'=>$creation,
        'position'=>$position,'member'=>$member,'house'=>$house]);
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }


    }
    public function memberstore(Request $request)
    {  
      
        // $data = request()->validate([
        //     'name' => 'required'
        // ]);
        
        try{
            //    return $request->all();
       
        // return 'ok';
       
          DB::transaction (function () use($request)  {
        $data=new Commity_member_details;
       $data->commity_id=$request->commity_id;
       $data->peroid_id=$request->period_id;
       $data->member_id=$request->member_id;
       $data->house_id=$request->house_id;
       $data->postion_id=$request->position_id;
        $data->save();
        // 
     });
        return redirect('members');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function members_index()
    {
        try{
      $data=Commity_member_details::with('period','house','member','committee','position')->get();
      
        
      return view('committee-members.index',['data'=>$data]);
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }
}
// 
public function getmember(Request $request)
{
    $id=$request->id;
     $member=Member_details::where('house_id',$id)->get(['id','name as name']);
     return response()->json($member);
}
    public function members_edit($id)
    {
        try{
            $period=Commity_period::get();
            $creation=Commity_creation::get();
            $position=Commity_position::get();
            $member=Member_details::get();
            $house=House_registration::get();
            $data=Commity_member_details::find($id);
            return view('committee-members.edit',['editdata'=>$data,'period'=>$period,'creation'=>$creation, 
            'position'=>$position,'member'=>$member,'house'=>$house] );
          
        
    }
    catch (Exception  $e) {
        // Do something with your exception

        return $e->getMassage();
    }

    }
    public function members_update(Request $request)
    {
        // $data = request()->validate([
        //     'name' => 'required'
        // ]);
        try{
            //return $request->all();
            DB::transaction (function () use($request){
                $data=Commity_member_details::find($request->id);
                $data->commity_id=$request->commity_id;
                $data->peroid_id=$request->period_id;
                $data->member_id=$request->member_id;
                $data->house_id=$request->house_id;
                $data->postion_id=$request->position_id;
             $data->save();
             
});

             
return redirect('members_index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function members_destroy($id)
    {
        try{
            $data=Commity_member_details::find($id);
            $data->delete();
            return redirect('members_index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function meeting()
    {
        try{
    
        return view('committee-meeting.create');
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }

 

   
}
public function meetingstore(Request $request)
{  
  
    // $data = request()->validate([
    //     'name' => 'required'
    // ]);
    
    try{
        //    return $request->all();
   
    // return 'ok';
   
      DB::transaction (function () use($request)  {
    $data=new Commity_meeting;
   $data->venue=$request->venue;
   $data->time=$request->time;
   $data->type=$request->type;
   $data->date=$request->date;
   
    $data->save();
    // 
 });
    return redirect('meeting');
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }
}
public function meeting_index()
    {
        try{
      $data=Commity_meeting::get();
      
        
      return view('committee-meeting.index',['data'=>$data]);
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }
}
public function meeting_edit($id)
    {
        try{
            
            $data=Commity_meeting::find($id);
            return view('committee-meeting.edit',['editdata'=>$data] );
          
        
    }
    catch (Exception  $e) {
        // Do something with your exception

        return $e->getMassage();
    }

    }
    public function meeting_update(Request $request)
    {
        // $data = request()->validate([
        //     'name' => 'required'
        // ]);
        try{
            //return $request->all();
            DB::transaction (function () use($request){
            $data=Commity_meeting::find($request->id);
            $data->venue=$request->venue;
            $data->date=$request->date;
            $data->time=$request->time;
            $data->type=$request->type;
             $data->save();
             
});

             
return redirect('meeting_index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function meeting_destroy($id)
    {
        try{
            $data=Commity_meeting::find($id);
            $data->delete();
            return redirect('meeting_index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function occured($id)
    {
        try{
        
            $data=Commity_meeting::find($id);
            $data->status=1;
            $data->save();
      return back();
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }
}
public function not_occured($id)
    {
        try{
        
            $data=Commity_meeting::find($id);
            $data->status=0;
            $data->save();
      return back();
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }
}
public function report($id)
    {
        try{
        
            $data=Commity_meeting::find($id);
            $data->status=0;
            $data->save();
            return view('meeting-report.create');
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }
}
public function meetingreportstore(Request $request)
{  
  
    // $data = request()->validate([
    //     'name' => 'required'
    // ]);
    
    try{
        //    return $request->all();
   
    // return 'ok';
   
      DB::transaction (function () use($request)  {
    $data=new Meeting_report;
   $data->discription=$request->discription;
  
   
    $data->save();
    // 
 });
    return redirect('meetingreport_index');
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }
}
public function meetingreport_index()
    {
        try{
      $data=Meeting_report::get();
      
        
      return view('meeting-report.index',['data'=>$data]);
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }
}
public function meetingreport_edit($id)
    {
        try{
            
            $data=Meeting_report::find($id);
            return view('meeting-report.edit',['editdata'=>$data] );
          
        
    }
    catch (Exception  $e) {
        // Do something with your exception

        return $e->getMassage();
    }

    }
    public function meetingreport_update(Request $request)
    {
        // $data = request()->validate([
        //     'name' => 'required'
        // ]);
        try{
            //return $request->all();
            DB::transaction (function () use($request){
            $data=Meeting_report::find($request->id);
            $data->discription=$request->discription;
          
             $data->save();
             
});

             
return redirect('meetingreport_index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function meetingreport_destroy($id)
    {
        try{
            $data=Meeting_report::find($id);
            $data->delete();
            return redirect('meetingreport_index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }


    public function event()
    {
        try{
    
        return view('committee-event.create');
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }

 

   
}
public function eventstore(Request $request)
{  
  
    // $data = request()->validate([
    //     'name' => 'required'
    // ]);
    
    try{
        //    return $request->all();
   
    // return 'ok';
   
      DB::transaction (function () use($request)  {
    $data=new Commity_event;
   $data->venue=$request->venue;
   $data->time=$request->time;
  
   $data->date=$request->date;
   
    $data->save();
    // 
 });
    return redirect('event');
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }
}
public function event_index()
    {
        try{
      $data=Commity_event::get();
      
        
      return view('committee-event.index',['data'=>$data]);
    }
    catch (Exception  $e) {
        // Do something with your exception
        return $e->getMassage();
    }
}
public function event_edit($id)
    {
        try{
            
            $data=Commity_event::find($id);
            return view('committee-event.edit',['editdata'=>$data] );
          
        
    }
    catch (Exception  $e) {
        // Do something with your exception

        return $e->getMassage();
    }

    }
    public function event_update(Request $request)
    {
        // $data = request()->validate([
        //     'name' => 'required'
        // ]);
        try{
            //return $request->all();
            DB::transaction (function () use($request){
            $data=Commity_meeting::find($request->id);
            $data->venue=$request->venue;
            $data->date=$request->date;
            $data->time=$request->time;
            
             $data->save();
             
});

             
return redirect('event_index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }
    public function event_destroy($id)
    {
        try{
            $data=Commity_event::find($id);
            $data->delete();
            return redirect('event_index');
        }
        catch (Exception  $e) {
            // Do something with your exception
            return $e->getMassage();
        }
    }


}
