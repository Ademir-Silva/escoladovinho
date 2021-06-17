<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="Rr84Ow9BqK3MvivpBAtXSVfSNRpgIeEUx5BYXrKS">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/max.css') }}" rel="stylesheet">
    <link href="{{ asset('css/teste.css') }}" rel="stylesheet">


</head>

<body>
    <div id="app">

        <main class="py-4">
            <main>
                <div class="wrapper ">

                    <div class="main-panel">
                        <!-- Navbar -->
                        <div class="sidebar" data-color="green" data-background-color="white">

                            <div class="logo">
                                <a href="{{ url('/') }}" class="simple-text logo-normal">
                                    {{ config('app.name', 'Inicio') }}
                                </a>
                            </div>
                            <div class="sidebar-wrapper">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('solicitar') }}">
                                            <i class=" material-icons">add</i>
                                            <p>Solicitar</p>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{ route('tabela_reagentes') }}">
                                            <i class="material-icons">dashboard</i>
                                            <p>Lista de Reagentes</p>
                                        </a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('tabela_insumos') }}">
                                            <i class="material-icons">content_paste</i>
                                            <p>Lista de Insumos</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">
                                            <i class="material-icons">view_list</i>
                                            <p>Estoque de produtos</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('solicitações') }}">
                                            <i class="material-icons">library_books</i>
                                            <p>Painel das solicitações</p>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                            <i class="material-icons">info</i>
                                            <p>Sobre</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- End Navbar -->
                        <div class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header card-header-primary">
                                                <h4 class="card-title ">Tabela dos Insumos</h4>
                                                <p class="card-category"> Lista com todas os insumos cadastrados</p>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class=" text-success">
                                                            <tr>
                                                                <th scope="col">Id</th>
                                                                <th scope="col">Nome</th>
                                                                <th scope="col">Descrição</th>
                                                                <th scope="col">Quantidade</th>
                                                                <th scope="col">Validade</th>
                                                                <th scope="col">Adquirido</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if($insumos->count())
                                                            @foreach($insumos as $insumos)
                                                            <tr>
                                                                <th scope="row">{{$insumos->id}}</th>
                                                                <td>{{$insumos->nome}}</td>
                                                                <td>{{$insumos->descrição}}</td>
                                                                <td>{{$insumos->validade}}</td>
                                                                <td>{{$insumos->adquirido}}</td>
                                                            </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            @else
                                            <p>Não possui Registro.</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </main>
        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>
