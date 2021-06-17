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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
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
                    <li class="nav-item active ">
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
                                    <h4 class="card-title ">Solicitado pelo Professor: "{{$insumos -> nome}}"</h4>
                                    <p class="card-category">Modifique os campos desejados</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <form id="CadIns" action="/home/atualizar_insumos/{{ $insumos->id }}" method="POST" class="row g-3 needs-validation" novalidate>
                                            @csrf
                                            @method('PUT')
                                            <div class="col-md-4">
                                                <label for="validationCustom01" class="form-label">Nome</label>
                                                <input type="text" class="form-control" id="validationCustom01" required name="nome" placeholder="nome" value="{{ $insumos->nome}}">
                                                <div class="valid-feedback">
                                                    Muito Bem
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom02" class="form-label">Descrição</label>
                                                <input class="form-control" id="validationCustom02" type="text" name="descrição" placeholder="descrição" value="{{ $insumos->descrição}}" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom03" class="form-label">validade</label>
                                                <input type="date" name="validade" class="form-control" id="validationCustom03" placeholder="validade" value="{{ $insumos->validade }}" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom04" class="form-label">adquirido</label> <br />
                                                <input type="date" name="adquirido" class="form-control" id="validationCustom04" placeholder="adquirido" value="{{ $insumos->adquirido}}" required> <br />
                                            </div>
                                            <div class="col-12">
                                                <input class="btn btn-success" type="submit" value="atualizar dados">
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
