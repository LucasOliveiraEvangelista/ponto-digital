<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ponto;
use PDF;

class PdfController extends Controller
{
    public function gerapdf(){
        $ponto = Ponto::all();
        $pdf = PDF::loadView('pdf', compact('ponto'));

        return $pdf->setPaper('A4')->download('Pontos.pdf');
    }
}
