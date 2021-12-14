<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use App\Models\Usuario;








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

Route::get('/ponto', function () {
    return view('ponto');
});


