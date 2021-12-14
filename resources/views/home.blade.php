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
                            <h4 class="text-light text-center">Entrada</h4>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-success" type="button">Entrada</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="p-3 bg-dark">
                            <h4 class="text-light text-center">Saída</h4>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-danger" type="button">Saída</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 bg-dark">
                            <h4 class="text-light text-center">Início intervalo</h4>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" type="button">Pausa</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 bg-dark">
                            <h4 class="text-light text-center">Fim do intervalo</h4>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" type="button">Retorno</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


@endsection

