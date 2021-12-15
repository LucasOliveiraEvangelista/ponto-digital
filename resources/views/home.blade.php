@extends('layouts.main')
@section('title', 'Home')
@section('content')

    <div class="card bg-dark shadow rounded text-center mt-5">
        <div class="card-header text-light">
            <h5>{{ session('user') }}</h5>
            <h6>
                @php
                    echo date("d/m/Y");
                @endphp
            </h6>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row g-2 ">
                    <div class="col-6">
                        <div class="p-3 bg-dark">
                            <h4 class="text-light text-center">Marcar Entrada</h4>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <form action="/processa" method="post">
                                    @csrf
                                    <input type='hidden' value="{{ session('user') }}" name='usuario'>
                                    <input type="checkbox"  style="visibility: hidden;" name="tipo" checked value="Entrada">
                                    <input class="btn btn-success" type="submit">Entrada</input>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="p-3 bg-dark">
                            <h4 class="text-light text-center">Marcar Saída</h4>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <form action="/processa" method="post">
                                        @csrf
                                        <input type='hidden' value="{{ session('user') }}" name='usuario'>
                                        <input type="checkbox"  style="visibility: hidden;" name="tipo" checked value="Saída">
                                        <input class="btn btn-danger" type="submit">Saída</input>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 bg-dark">
                            <h4 class="text-light text-center">Início intervalo</h4>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <form action="/processa" method="post">
                                        @csrf
                                        <input type='hidden' value="{{ session('user') }}" name='usuario'>
                                        <input type="checkbox"  style="visibility: hidden;" name="tipo" checked value="Pausa">
                                        <input class="btn btn-primary" type="submit">Pausa</input>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 bg-dark">
                            <h4 class="text-light text-center">Fim do intervalo</h4>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <form action="/processa" method="post">
                                        @csrf
                                        <input type='hidden' value="{{ session('user') }}" name='usuario'>
                                        <input type="checkbox"  style="visibility: hidden;" name="tipo" checked value="Volta">
                                        <input class="btn btn-primary" type="submit">Retorno</input>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


@endsection

