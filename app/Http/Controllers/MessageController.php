<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member_details;

class MessageController extends Controller
{

public function custome_massage()
    {
         try {


                return view('messages.create');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
      public function custome_massage_post(Request $request)
        {
        //   return $request->all();
           
                // $mnd=explode(',', $request->mobile);
                // return $mnd;
                $type = $request->type;


if($type==2)
{
$member=Member_details::get();

// $contactnum=$member->contact_number;

$message = $request->massage;
$message = urlencode($message);
          


            // $message = $request->massage;
//  $message = urlencode($message);
            $mobb= explode(',',$contactnum);
            // $mobb= $request->mobile;
foreach($mobb as $key=>$mb)
{
        $moble = "91".$mb;
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );
                    $response = file_get_contents("https://dealsms.in/api/send?number=$moble&type=text&message=$message&instance_id=6458E0131EB81&access_token=6458977d6144d", false, stream_context_create($arrContextOptions));

}
}

  }
}
    
