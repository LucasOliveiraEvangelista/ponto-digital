<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    
    public function login(Request $req)
    {
      $username = $req->input('user');
      $password = $req->input('pass');
     

      $checklogin = DB::table('usuarios')->where(['email'=>$username, 'senha'=>$password])->get();
      if(count($checklogin) > 0)
      {
        $req->session()->put('user', $username);
        return redirect('perfil');
      }
      else
      {
        echo "falhou";
        return redirect('login');
      }
    }
}
