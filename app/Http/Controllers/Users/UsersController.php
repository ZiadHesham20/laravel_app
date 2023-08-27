<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function ourMain(){
        echo 'hello from our main method';
    }
    public function index(){
         $cuser = 'ziad';
        $allusers = [1,2,3,4,5,6];
        //return view('users.allusers')->with('users',$allUsers);
        return view('users.allusers',compact('allusers','cuser'));
    }
    public function create($id = 1){
        return view('users.edituser',compact('id'));
    }
}
