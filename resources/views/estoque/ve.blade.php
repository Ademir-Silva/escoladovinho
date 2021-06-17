@extends('layouts.app')

@section('content')
<main>

    @guest
    @if (Route::has('login'))
    <p class="">É necessario fazer o login</p>

    @endif
    @else

    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white">

            <div class="logo">
                <a href="{{ url('/') }}" class="simple-text logo-normal">
                    {{ config('app.name', 'Inicio') }}
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('home') }}"">
                                        <i class=" material-icons">add</i>
                            <p>Inserir</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ver_reagentes') }}">
                            <i class="material-icons">dashboard</i>
                            <p>Lista de Reagentes</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ver_insumos') }}">
                            <i class="material-icons">content_paste</i>
                            <p>Lista de Insumos</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('ver_estoque') }}">
                            <i class="material-icons">view_list</i>
                            <p>Estoque de produtos</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('ver_solicitações') }}">
                            <i class="material-icons">library_books</i>
                            <p>Solicitações</p>
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
        <div class="main-panel">
            <!-- Navbar -->

            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-success">
                                    <h4 class="card-title ">Tabela do Estoque</h4>
                                    <p class="card-category"> Lista com todos os itens cadastrados</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-success">
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Grupo</th>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Validade</th>
                                                    <th scope="col">Adquirido</th>
                                                    <th scope="col">Quantidade</th>
                                                    <th scope="col">Tipo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($estoque->count())
                                                @foreach($estoque as $estoque)
                                                <tr>
                                                    <th scope="row">{{$estoque->id}}</th>
                                                    <td>{{$estoque->grupo}}</td>
                                                    <td>{{$estoque->nome}}</td>
                                                    <td>{{$estoque->validade}}</td>
                                                    <td>{{$estoque->adquirido}}</td>
                                                    <td>{{$estoque->quantidade}}</td>
                                                    <td>{{$estoque->tipo}}</td>
                                                    <td class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a class="btn btn-outline-success" href="/home/editar_estoque/{{ $estoque->id}}">editar</a>
                                                        <form action="/home/ver_estoque/{{ $estoque->id}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-outline-danger" type="submit">Excluir</button>
                                                        </form>
                                                    </td>
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

    @endguest

</main>
@endsection
