<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Ponto;

class HomeController extends Controller
{
     
    public function index()
    {
        return view('home');
    }
    public function ver(){
        $usuarios = Usuario::get();
        return view('home', ['usuario' => $usuarios]);
    }
}
