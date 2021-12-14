@extends('layouts.main')
@section('title', 'Ponto')
@section('content')

    <div class="table-responsive mt-5">
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">Dia</th>
                <th scope="col">Horario</th>
                <th scope="col">Tipo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">14/12/2021</th>
                    <td>08:05:33</td>
                    <td>Entrada</td>
                </tr>
                <tr>
                    <th scope="row">14/12/2021</th>
                    <td>12:02:22</td>
                    <td>Pausa</td>
                    
                </tr>
                <tr>
                    <th scope="row">14/12/2021</th>
                    <td>13:00:42</td>
                    <td>Volta</td>
                </tr>
                <tr>
                    <th scope="row">14/12/2021</th>
                    <td>17:34:52</td>
                    <td>Saída</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-success" type="button">Download Excel</button>
        <button class="btn btn-danger" type="button">Download PDF</button>
    </div>

@endsection