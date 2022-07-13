<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visiter;


class usercontroller extends Controller
{
   
    public function index(){
     return view('userfrontend');   
    }
   
    public function userview( Request $request)
    {
        $search=$request['search'] ?? "";
        if ($search !="")
        {
            $visiter=visiter::where('name' , 'LIKE' , "%$search%")->get();
        }
        else{
            $visiter = visiter::paginate();
        }

        

        $data=compact('visiter' , 'search');

        return view('userview')->with($data);

    }
    public function recylebin()
    {
        $visiter = visiter::onlyTrashed()->get();

        $data=compact('visiter');
        return view('usertrashview')->with($data);

    }



    public function usertrash($id)
    {
       
         visiter::find($id)->delete();
         return redirect()->back();
        
    }

    public function restore($id)
    {
        $visiter= visiter::onlyTrashed()->find($id);
        $visiter->restore();
         return redirect()->back();
        
    }

    public function forcedelete($id)
    {
        $visiter= visiter::onlyTrashed()->find($id);
        $visiter->forcedelete();
         return redirect()->back();
        
    }


    public function useredit($id)
    {
        $url =url('user/update').'/'.$id;
        $tittle="update form";
        $visiter=visiter::find($id);
        $data=compact('visiter','tittle','url');
        return view('userform')->with($data);
    }
    public function update( $id, Request $request)
    {
        $visiter=visiter::find($id);
        $visiter->name=$request['name'];
        $visiter->email= $request['email']; 
        $visiter->password= $request['password']; 
        $visiter->save();
        return redirect()->back();

    }
}


