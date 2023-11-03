<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;






class Users extends Controller
{

    public function list()
    {
        // return Session::get("logData");
        $user = User::all();
       return view('userlist', ['user' => $user]);

    }

    public function create()
    {
        return view("create");


    }
    public function login()
    {
        return view("login");


    }
    public function loginsubmit(Request $req)
    {

        //  return User::all();
        // print_r($req->input());
         User::select("*")->where(
            $req->name,
            $req->email,
            $req->password
        )->get();

        $req->session()->put('logData', [$req->input()]);
        return redirect('/list');
    }
    public function createsubmit(Request $req)
    {

        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;

        $result = $user->save();
        if ($result) {
            return redirect('/list');

        }
    }



    //     ["email", $req->email],
//     ['password','=',$req->password]
// )->get();



}
