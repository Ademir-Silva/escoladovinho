@extends('layouts.app')

@section('content')
<main>

    @guest
    @if (Route::has('login'))
    <p class="">É necessario fazer o login</p>

    @endif
    @else

    <div class="wrapper ">
        <div class="sidebar" data-color="green" data-background-color="white">

            <div class="logo">
                <a href="{{ url('/') }}" class="simple-text logo-normal">
                    SIGE
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">
                                        <i class=" material-icons">add</i>
                            <p>Inserir</p>
                        </a>
                    </li>
                    <li class="nav-item ">
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
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('ver_solicitações') }}">
                            <i class="material-icons">library_books</i>
                            <p>Solicitações</p>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('sobre') }}">
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
            <div class="">

                <div class="container-fluid">
                    <div class="row">
                        <!--<a class="btn btn-danger" href="{{ route('teste') }}">teste</a>-->
                        <div class="">

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="card">

                                            <div class="card-header card-header-primary">
                                                <h4 class="card-title ">Cadastro de Insumo</h4>
                                                <p class="card-category">Adicione um item a lista de insumos</p>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <form id="CadIns" action="{{ route('registra_insumos') }}" method="POST" class="row g-3 needs-validation" novalidate>
                                                        @csrf
                                                        <div class="">
                                                            <label for="validationCustom01" class="form-label">Nome</label>
                                                            <input type="text" class="form-control" id="validationCustom01" required name="nome" placeholder="Nome do Insumo">
                                                            <div class="valid-feedback">
                                                                Muito Bem
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Campo obrigatório
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <label for="validationCustom02" class="form-label">Descrição</label>
                                                            <input class="form-control" id="validationCustom02" type="text" name="descrição" placeholder="Descrição do Insumo" required>
                                                            <div class="valid-feedback">
                                                                Muito Bem
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Campo obrigatório
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <label for="validationCustom03" class="form-label">validade</label>
                                                            <input type="date" name="validade" class="form-control" id="validationCustom03" required>
                                                            <div class="valid-feedback">
                                                                Muito Bem
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Campo obrigatório
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <label for="validationCustom04" class="form-label">adquirido</label> <br />
                                                            <input type="date" name="adquirido" class="form-control" id="validationCustom04" required> <br />
                                                            <div class="valid-feedback">
                                                                Muito Bem
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Campo obrigatório
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="modal-footer">
                                                                <button class="btn btn-success" type="submit">Salvar dados</button>
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="card">
                                            <div class="card-header card-header-primary">
                                                <h4 class="card-title ">Cadastro de Reagentes</h4>
                                                <p class="card-category">Adicione um item a lista de Reagentes</p>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <form id="CadIns" action="{{ route('registra_produtos') }}" method="POST" class="row g-3 needs-validation" novalidate>
                                                        @csrf
                                                        <div class="">
                                                            <label for="validationCustom01" class="form-label">Nome</label>
                                                            <input type="text" class="form-control" id="validationCustom01" required name="nome" placeholder="Nome do Reagente">
                                                            <div class="valid-feedback">
                                                                Muito Bem
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Campo obrigatório
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <label for="validationCustom02" class="form-label">Gramas / Litros</label>
                                                            <input class="form-control" id="validationCustom02" type="text" name="gramas" placeholder="Gramas/litros" required>
                                                            <div class="valid-feedback">
                                                                Muito Bem
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Campo obrigatório
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <label for="validationCustom02" class="form-label">Quantidade</label>
                                                            <input class="form-control" id="validationCustom02" type="text" name="quantidade" placeholder="Quantidade" required>
                                                            <div class="valid-feedback">
                                                                Muito Bem
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Campo obrigatório
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <label for="validationCustom03" class="form-label">validade</label>
                                                            <input type="date" name="validade" class="form-control" id="validationCustom03" required>
                                                            <div class="valid-feedback">
                                                                Muito Bem
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Campo obrigatório
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <label for="validationCustom04" class="form-label">adquirido</label> <br />
                                                            <input type="date" name="adquirido" class="form-control" id="validationCustom04" required> <br />
                                                            <div class="valid-feedback">
                                                                Muito Bem
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Campo obrigatório
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="modal-footer">
                                                                <button class="btn btn-success" type="submit">Salvar dados</button>
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="card">
                                            <div class="card-header card-header-primary">
                                                <h4 class="card-title ">Cadastro do estoque de produtos</h4>
                                                <p class="card-category">Adicione um item ao seu estoque de produtos</p>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <form id="CadIns" action="{{ route('registra_estoque') }}" method="POST" class="row g-3 needs-validation" novalidate>
                                                        @csrf
                                                        <div class="">
                                                            <label for="validationCustom02" class="form-label">Selecione o Grupo</label>

                                                            <div class="form-check">
                                                                <input class="" type="radio" name="grupo" value="Vinhos" id="flexRadioDefault1">
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Vinhos
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="radio" name="grupo" value="Sucos" id="flexRadioDefault2" checked>
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    Sucos
                                                                </label>
                                                            </div>

                                                        </div>
                                                        <div class="">
                                                            <label for="validationCustom01" class="form-label">Nome</label>
                                                            <input type="text" class="form-control" id="validationCustom01" required name="nome" placeholder="Nome do Reagente">
                                                            <div class="valid-feedback">
                                                                Muito Bem
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Campo obrigatório
                                                            </div>
                                                        </div>

                                                        <div class="">
                                                            <label for="validationCustom03" class="form-label">validade</label>
                                                            <input type="date" name="validade" class="form-control" id="validationCustom03" required>
                                                            <div class="valid-feedback">
                                                                Muito Bem
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Campo obrigatório
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <label for="validationCustom04" class="form-label">adquirido</label> <br />
                                                            <input type="date" name="adquirido" class="form-control" id="validationCustom04" required> <br />
                                                            <div class="valid-feedback">
                                                                Muito Bem
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Campo obrigatório
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <label for="validationCustom02" class="form-label">Quantidade</label>
                                                            <input class="form-control" id="validationCustom02" type="text" name="quantidade" placeholder="Quantidade" required>
                                                            <div class="valid-feedback">
                                                                Muito Bem
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Campo obrigatório
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <label for="validationCustom02" class="form-label">Selecione o Grupo</label>

                                                            <div class="form-check">
                                                                <input class="" type="radio" name="tipo" value="litro/s" id="flexRadioDefault1">
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Litro/s
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="radio" name="tipo" value="kilo/s" id="flexRadioDefault2" checked>
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    Kilo/s
                                                                </label>
                                                            </div>
                                                            <div class="valid-feedback">
                                                                Muito Bem
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Campo obrigatório
                                                            </div>

                                                        </div>
                                                        <div class="col-12">
                                                            <div class="modal-footer">
                                                                <button class="btn btn-success" type="submit">Salvar dados</button>
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="card m-1 content">
                                <div class="card-header card-header-success">
                                    <h4 class="card-title ">Tela de cadastro</h4>
                                    <p class="card-category">Escolha um item</p>
                                </div>
                                <div class="card-body">
                                    <div class="container d-flex m-5">

                                        <button type="button" class="modulo-info btn btn-outline-primary m-1" data-bs-toggle="modal" data-bs-target="#exampleModal">

                                            <i class="material-icons mx-2 my-4" style="font-size: 50px;">content_paste</i>
                                            <div class="my-2">Insumos</div>

                                        </button>

                                        <button type="button" class="modulo-info btn btn-outline-info m-1" data-bs-toggle="modal" data-bs-target="#exampleModal2">

                                            <i class="material-icons mx-2 my-4" style="font-size: 50px;">dashboard</i>
                                            <div class="my-2">Reagentes</div>
                                        </button>

                                        <button class="modulo-info btn btn-outline-success m-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3">

                                            <i class="material-icons mx-2 my-4" style="font-size: 50px;">view_list</i>
                                            <div class="my-2">Estoque</div>
                                        </button>

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
