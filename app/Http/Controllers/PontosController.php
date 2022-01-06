<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ponto;
use DB;
use PDF;

class PontosController extends Controller
{
    public function index(){
        $pontos = Ponto::get();
        return view('ponto', ['ponto' => $pontos]);
    }

    public function ver( $email ){
        $pontos = DB::table('pontos')->select('id', 'user', 'dia', 'hora', 'tipo')->where('user', '=', $email)->orderBy('dia', 'desc')->get();
        return view('ponto', ['ponto' => $pontos]);
        return view('meu_Ponto');
    }

   
}
