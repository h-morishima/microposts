<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowContoller extends Controller
{
    public function store(Request $request,$id)
    {
        \Auth::user()->follow($id);
        return back();
    }    
     
     public function destory($id)   
    {    
        \Auth::user()->unfollow($id);
        return back();
    }
}
