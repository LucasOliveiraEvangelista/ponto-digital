<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PontosController;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Ponto;







Route::get('/', function(){
    if(!session()->has('user')){

        
        return view('login', [App\Http\Controllers\LoginController::class, 'index']);
    }

    return view('home');
});


Route::get('/home', function(){
    if(!session()->has('user')){

        
        return view('login', [App\Http\Controllers\LoginController::class, 'index']);
    }
    
    return view('home');
});




Route::get('/login', function () {
        if(session()->has('user')){

            return redirect('perfil');
        }

    return view('login', [App\Http\Controllers\LoginController::class, 'index']);
});


Route::post('/logg',  [App\Http\Controllers\LoginController::class, 'login']);




Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect('login');
});




Route::get('/perfil', function () {
    if(!session()->has('user')){

        
        return view('login', [App\Http\Controllers\LoginController::class, 'index']);
    }

    return view('perfil');
    
});


Route::get('/register', function(){
    return view('register', [App\Http\Controllers\RegisterController::class, 'index']);
});






//    Criação de usuario    //
Route::post('/register-user', function (Request $request) {
    Usuario::create([
        'nome'=>$request->nome,
        'email'=>$request->email,
        'senha'=>$request->senha
    ]);
    $request->session()->put('user', $request->email);
    return Redirect::to('/home');
 
});



//  Edição de usuario   //

Route::get('/editar/{id}', function ($id) {
    $usuario = Usuario::find($id);
    return view('editar', ['usuario' => $usuario]);
}); 



Route::post('/editar-user/{id}', function ($id, Request $request) {
    $usuario = Usuario::findOrfail( $id );
    $usuario->update( $request->all() );
    \Session::flash('msg_update', 'Atualizado com sucesso!');
    return Redirect::to('/home');

    //dd($request->all());  -> Debug and die

    echo "Editado com sucesso";
});




//    Criação de ponto      //

Route::get('/ponto', [App\Http\Controllers\PontosController::class, 'index']);

Route::get('/error', function () {
    return view('error');
});

Route::post('/processa', function (Request $request) {

    $dia = date("d/m/Y");
    $hora = date("H:i:s");
    Ponto::create([
        'user'=>$request->usuario,
        'tipo'=>$request->tipo,
        'dia'=>$dia,
        'hora'=>$hora
    ]);
    return Redirect::to('/home');
});

Route::get('/meu_ponto/{user}', [App\Http\Controllers\PontosController::class, 'ver']);
Route::get('/pdf', [App\Http\Controllers\PdfController::class, 'gerapdf'])->name('excel');
Route::get('users/export', [App\Http\Controllers\PlanilhasController::class, 'export'])->name('excel');