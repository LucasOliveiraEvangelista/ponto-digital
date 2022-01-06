@extends('layouts.main')
@section('title', 'User')
@section('content')

<div class="card text-center text-light bg-dark mt-5">
 
  <div class="card-body">
    <h5 class="card-title">{{ session('user') }}</h5>
    <div class="container">
                <div class="row g-2 ">
                    <div class="col-6">
                        <div class="p-3 bg-dark">
                            <h4 class="text-light text-center">Meta Mensal</h4>
                            <div class="d-grid gap-2 col-6 mx-auto">
                            <div class="progress">
                              <div class="progress-bar bg-primary"  role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="p-3 bg-dark">
                            <h4 class="text-light text-center">Meu Horário</h4>
                            <div class="d-grid gap-2 col-6 mx-auto">
                            <span  class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Tempo diário: 9hrs p/dia">
                              7:30am - 17:30pm
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 bg-dark">
                            <h4 class="text-light text-center">Adicionar Hora Extra</h4>
                            <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="button" class="btn btn-primary">Adicionar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 bg-dark">
                            <h4 class="text-light text-center">Meu Banco de Horas</h4>
                            <div class="d-grid gap-2 col-6 mx-auto">
                            <h5 class="text-light text-center">
                                    @php
                                    // fazer com valores do banco
                                    $horario1 = '07:35:00';
                                    $horario2 = '12:15:25';
                                    $horario3 = '13:18:25';
                                    $horario4 = '17:45:14';     

                                    //Calcula o tempo de upload

                                    $entrada = $horario1;
                                    $pausa = $horario2;
                                    $volta = $horario3;
                                    $saida = $horario4;

                                    $hora1 = explode(":",$entrada);
                                    $hora2 = explode(":",$pausa);
                                    $hora3 = explode(":",$volta);
                                    $hora4 = explode(":",$saida);

                                    $acumulador1 = ($hora1[0] * 3600) + ($hora1[1] * 60) + $hora1[2];
                                    $acumulador2 = ($hora2[0] * 3600) + ($hora2[1] * 60) + $hora2[2];
                                    $acumulador3 = ($hora3[0] * 3600) + ($hora3[1] * 60) + $hora3[2];
                                    $acumulador4 = ($hora4[0] * 3600) + ($hora4[1] * 60) + $hora4[2];

                                    $meu_horario = 9;
                                    $resultado =($acumulador2 - $acumulador1) + ($acumulador4 - $acumulador3);
                                    $hora_ponto = floor($resultado / 3600);
                                    $resultado = $resultado - ($hora_ponto * 3600);
                                    $min_ponto = floor($resultado / 60);
                                    $resultado = $resultado - ($min_ponto * 60);
                                    $secs_ponto = $resultado;
                                    //Grava na variável resultado final
                                    $tempo = ($hora_ponto - $meu_horario).":".$min_ponto.":".$secs_ponto;
                                    echo $tempo;
                                @endphp
                            </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <a href="/logout" class="btn btn-primary">Sair</a>
    <a href="{{ route('excel')}}" class="btn btn-danger" >Download EXcel</a>
    <a href="/pdf" class="btn btn-danger" >Download PDF</a>
  </div>
</div>

    

@endsection

