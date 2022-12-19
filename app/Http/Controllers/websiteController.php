<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\website;

class websiteController extends Controller
{
    
 public function show()
{
    return view('website');  // code...
}
    

 public function save(Request $request)
{


  $title_save =new website;
  $url=$request->input('link');  
  $fp = file_get_contents($url);
   if (!$fp){
$title="No Save ";
   }
   $res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
   if (!$res){
$title="No Save ";
   } 
   $title = preg_replace('/\s+/', ' ', $title_matches[1]);
   $title = trim($title); 

  $title_save->title=$title; 
  $title_save->save();
return $title;
return response()->json(['success'=>'saved susscessfully']);
      // code...
}


}
