<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
   function userLogin(Request $req)
    {
        $data = $req->input();
        $req->session()->put('user', $data['userName']);
        $req->session()->put('email', $data['email']);
        $req->session()->put('phone', $data['password']);
        return redirect('ses');
    }
}
