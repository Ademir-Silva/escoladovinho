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
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('ver_insumos') }}">
                            <i class="material-icons">content_paste</i>
                            <p>Lista de Insumos</p>
                        </a>
                    </li>
                    <li class="nav-item">
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
                    
                    <li class="nav-item">
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
            <!-- Button trigger modal -->

            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <button class="btn btn-outline-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Filtros e Pesquisa</button>

                            <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Pesquise e filtre resultados</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="input-group rounded ps-5">
                                    <input type="search" class="form-control rounded" placeholder="Pesquisar" aria-label="Search" aria-describedby="search-addon" />
                                    <span class="input-group-text border-0" id="search-addon">
                                        <i class="material-icons">search</i>
                                    </span>
                                </div>
                                <div class="offcanvas-body">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed py-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                    <i class="material-icons">edit</i>
                                                    Nome
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <a class="btn btn-outline-success" href="{{ route('ver_insumos_nome') }}">
                                                        <span class="material-icons">
                                                            arrow_upward
                                                        </span>
                                                        Crescente
                                                    </a>

                                                    <a class="btn btn-outline-info" href="{{ route('ver_insumos_nome_dec') }}">
                                                        <span class="material-icons">
                                                            arrow_downward
                                                        </span>
                                                        Decrescente
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header " id="flush-headingTwo">
                                                <button class="accordion-button collapsed py-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                    <i class="material-icons">event</i>
                                                    Validade
                                                </button>
                                            </h2>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <a class="btn btn-outline-success" href="{{ route('ver_insumos_data') }}">
                                                        <span class="material-icons">
                                                            arrow_upward
                                                        </span>
                                                        Crescente
                                                    </a>

                                                    <a class="btn btn-outline-info" href="{{ route('ver_insumos_data_dec') }}">
                                                        <span class="material-icons">
                                                            arrow_downward
                                                        </span>
                                                        Decrescente
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingThree">
                                                <button class="accordion-button collapsed+ py-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                    <i class="material-icons">
                                                        add_circle_outline
                                                    </i>
                                                    Adquirido
                                                </button>
                                            </h2>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <a class="btn btn-outline-success" href="{{ route('ver_insumos_ad') }}">
                                                        <span class="material-icons">
                                                            arrow_upward
                                                        </span>
                                                        Crescente
                                                    </a>

                                                    <a class="btn btn-outline-info" href="{{ route('ver_insumos_ad_dec') }}">
                                                        <span class="material-icons">
                                                            arrow_downward
                                                        </span>
                                                        Decrescente
                                                    </a>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if (Session::has('message'))
                            <div class="alert alert-success">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                                    <use xlink:href="#check-circle-fill" />
                                </svg>
                                {{ Session::get('message') }}
                            </div>
                            @endif
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Tabela de Insumos</h4>
                                    <p class="card-category"> Lista com todos os insumos cadastrados</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-success">
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Descrição</th>
                                                    <th scope="col">Validade
                                                    </th>
                                                    <th scope="col">Adquirido</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($insumos->count())
                                                @foreach($insumos as $insumos)

                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel"> {{$insumos->nome}}</h5>

                                                            </div>
                                                            <div class="modal-body">
                                                                Descrição: {{$insumos->descrição}} <br />
                                                                Validade: {{$insumos->validade}} <br />
                                                                Adquirido: {{$insumos->adquirido}} <br />
                                                                Criado em: {{$insumos->created_at}} <br />
                                                                Ultima atualização: {{$insumos->updated_at}} <br />
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechat</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <tr>
                                                    <th scope="row">{{$insumos->id}}</th>
                                                    <td>
                                                        <a type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            {{$insumos->nome}}
                                                        </a>
                                                    </td>
                                                    <td>{{$insumos->descrição}}</td>
                                                    <td>{{$insumos->validade}}</td>
                                                    <td>{{$insumos->adquirido}}</td>
                                                    <td class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a class="btn btn-outline-success" href="/home/editar_insumos/{{ $insumos->id}}">editar</a>
                                                        <form action="/home/ver_insumos/{{ $insumos->id}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-outline-danger">Excluir</button>
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
