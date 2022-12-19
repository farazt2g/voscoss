<?php

namespace App\Http\Controllers;
use App\Models\Image;

use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    public function upload(Request $request){
  // dd($request->all()); exit;
   
//dd($request->file('profile')->getClientoriginalName());
$image_save =new Image;
$name= $request->file('profile')->getClientoriginalName();
$request->file('profile')->storeAs('public/images',$name);

//$image_save = $request->profile;
echo $image_save->email = $request['email'];
echo $image_save->pswd = $request['pswd'];
echo $image_save->image=$request->file('profile')->getClientoriginalName();
//exit;
$image_save->save();
return back();

}
}
