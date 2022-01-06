@extends('layouts.main')
@section('title', 'Home')
@section('content')
<div id="liveAlertPlaceholder"></div>

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
                                    <input class="btn btn-success"  id="liveAlertBtn" type="submit">Entrada</input>
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
                                        <input class="btn btn-danger" id="liveAlertBtn3" type="submit">Saída</input>
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
                                        <input class="btn btn-primary" id="liveAlertBtn2" type="submit">Pausa</input>
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
                                        <input class="btn btn-primary" id="liveAlertBtn1" type="submit">Retorno</input>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
            <img src="..." class="rounded me-2" alt="...">
            <strong class="me-auto">Bootstrap</strong>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
            Marcado com sucesso
            </div>
        </div>
    </div>

    <script>
        var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
        var alertTrigger = document.getElementById('liveAlertBtn')
        var alertTrigger1 = document.getElementById('liveAlertBtn1')
        var alertTrigger2 = document.getElementById('liveAlertBtn2')
        var alertTrigger3 = document.getElementById('liveAlertBtn3')

        function alert(message, type) {
        var wrapper = document.createElement('div')
        wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

        alertPlaceholder.append(wrapper)
        }

        if (alertTrigger) {
        alertTrigger.addEventListener('click', function () {
            alert('Ponto Marcado com sucesso!!', 'success')
        })
        }if (alertTrigger1) {
        alertTrigger1.addEventListener('click', function () {
            alert('Ponto Marcado com sucesso!!', 'info')
        })
        }if (alertTrigger2) {
        alertTrigger2.addEventListener('click', function () {
            alert('Ponto Marcado com sucesso!!', 'info')
        })
        }if (alertTrigger3) {
        alertTrigger3.addEventListener('click', function () {
            alert('Ponto Marcado com sucesso!!', 'danger')
        })
        }
    </script>


@endsection

