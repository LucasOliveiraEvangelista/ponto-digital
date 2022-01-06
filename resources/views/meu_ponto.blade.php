@extends('layouts.main')
@section('title', 'Ponto')
@section('content')



    <div class="table-responsive mt-5">
        
           
       
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">User</th>
                <th scope="col">Dia</th>
                <th scope="col">Horario</th>
                <th scope="col">Tipo</th>
                
                </tr>
            </thead>
            <tbody>
            @foreach($ponto as $p)
                <tr>
                    <th scope="row">{{ $p->user  }} </th>
                    <th scope="row">{{ $p->dia  }} </th>
                    <td>{{ $p->hora }}</td>
                    <td>{{$p->tipo }}</td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
        
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button  class="btn btn-success" type="button">Download Excel</button>
        <a href="/pdf" class="btn btn-danger" >Download PDF</a>
    </div>

    

@endsection