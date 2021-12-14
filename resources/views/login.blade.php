@extends('layouts.main')
@section('title', 'Login')
@section('content')

    <div class="card text-white bg-dark m-5 shadow">
        <div class="card-body">
            <form action="/logg" method="post">
                @csrf
                <div class="mb-2 m-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="user" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-2 m-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-warning m-3">Login</button>
                <p>Não tem conta? <a href="register">Crie uma conta</a></p>
            </form>
        </div>
    </div>

@endsection