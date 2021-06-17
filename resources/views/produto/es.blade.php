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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ver_estoque') }}">
                            <i class="material-icons">view_list</i>
                            <p>Estoque de produtos</p>
                        </a>
                    </li>
                    <li class="nav-item active">
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
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Solicitado pelo professor: "{{$pedido -> nome}}"</h4>
                                    <p class="card-category">Edite o status da solicitação {{$pedido->id}}</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <form id="CadIns" action="/home/atualizar_solicitações/{{ $pedido->id }}" method="POST" class="row g-3 needs-validation" novalidate>
                                            @csrf
                                            @method('PUT')
                                            <div class="shadow-none p-3 mb-5 bg-light rounded">
                                                <div class="col-md-4">
                                                    <label for="validationCustom01" class="form-label">Nome do Professor</label>
                                                    <input type="text" readonly class="form-control-plaintext" id="validationCustom01" required name="nome" placeholder="nome do Professor" value="{{ $pedido->nome}}">
                                                    <div class="valid-feedback">
                                                        Muito Bem
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationCustom02" class="form-label">Tipo do item</label>
                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" name="item" value="{{$pedido->item}}">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationCustom03" class="form-label">Nome do item</label>
                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" name="nome_item" value="{{ $pedido->nome_item}}" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationCustom04" class="form-label">Data para utilização</label> <br />
                                                    <input type="date" readonly name="previsão" class="form-control-plaintext" id="validationCustom04" value="{{ $pedido->previsão}}" required> <br />
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationCustom02" class="form-label">Quantidade</label>
                                                    <input class="form-control-plaintext" readonly id="validationCustom02" type="text" name="quantidade" placeholder="Quantidade" value="{{ $pedido->quantidade}}" required>
                                                </div>

                                            </div>

                                            <div class="shadow p-3 mb-5 bg-body rounded">
                                                <label for="validationCustom02" class="form-label">Situação</label>

                                                <div class="form-check">
                                                    <input class="" type="radio" name="situação" value="Aprovado" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Aprovar
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" name="situação" value="Recusado" id="flexRadioDefault2">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Recusar
                                                    </label>
                                                </div>
                                                <p>Situação Atual : {{$pedido->situação}}</p>

                                            </div>

                                            <div class="col-12">
                                                <button class="btn btn-success" type="submit">Atualizar</button>
                                                <p>Ultima atualização em : {{$pedido->updated_at}}</p>
                                                <p>Submetido em : {{$pedido->created_at}}</p>
                                            </div>

                                        </form>
                                    </div>
                                </div>

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
