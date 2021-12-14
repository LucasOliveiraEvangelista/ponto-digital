<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>


        <link rel="shortcut icon" href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fystevo.com%2Fpt%2Finicio%2F&psig=AOvVaw0C5enHP3kPctfkG7P7084q&ust=1639500013815000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPD26dSb4fQCFQAAAAAdAAAAABAD" type="image/x-icon">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
        
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">
                Ponto Y&Stevo
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/ponto">Meu Ponto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/perfil">Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="active"><button type="button" class="btn btn-outline-light">Logout</button></a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
        <script type="module" src ="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> 
        <script nomodule src ="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>