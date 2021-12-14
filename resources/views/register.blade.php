@extends('layouts.main')
@section('title', 'Register')
@section('content')

    <div class="card text-white bg-dark m-3">
        <div class="card-body">

            <form action="/register-user" method="post">
                @csrf
                <div class="mb-2 m-3">
                    <label for="nome" class="form-label">Name</label>
                    <input type="text" name="nome" class="form-control" id="nome">
                </div>
                <div class="mb-2 m-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-2 m-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary m-3">Register</button>

            </form>

        </div>
    </div>
@endsection