@extends('layouts.main')
@section('title', 'User')
@section('content')

<div class="card text-center text-light bg-dark mt-5">
 
  <div class="card-body">
    <h5 class="card-title">{{ session('user') }}</h5>
    <p class="card-text"></p>
    <a href="/logout" class="btn btn-primary">Sair</a>
  </div>
</div>
    

@endsection