<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>