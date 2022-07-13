<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\countries;
use App\Models\visiter;

class ipcontroller extends Controller
{
   
public function ipaddress(Request $req )
{
    $ip=$req->ip();

    $country=countries::where('ip','=', $ip)->get(); 
   
    $data=compact('country');  
    return view('userfrontend')->with($data);
}
public function manualip($ip)
{
    $country=countries::where('ip','=', $ip)->get();
    $data=compact('country');
    return view('userfrontend')->with($data);
}


public function tabledata()
{

return visiter::with('group')->get();

}

public function register(Request $request)
{
    $ip=$request->ip();
    $url =url('/user');
    $tittle="registration  form";
    $data=compact('url','tittle');
    return view('userform')->with($data);
}


public function save(Request $request)
{
    $ip=$request->ip();
    $visiter=new visiter; 
    $country=countries::where('ip','=', $ip)->get();
  $visiter->name= $request['name']; 
  $visiter->email= $request['email']; 
  $visiter->password= $request['password']; 
  foreach($country as $cou)
  {
    $visiter->country_id= $cou->country_id;
   // echo $visiter->country_id;
  }
  $visiter->save();
  return redirect ('/');
}





}
