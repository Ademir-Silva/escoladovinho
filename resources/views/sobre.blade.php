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
                <a href="{{ url('/home') }}" class="simple-text logo-normal">
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
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('ver_solicitações') }}">
                            <i class="material-icons">library_books</i>
                            <p>Solicitações</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">
                            <i class="material-icons">settings</i>
                            <p>Configurações</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="{{ route('sobre') }}">
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
                            <h1>SIGE | Escola Do Vinho</h1>

                            <h2>O que é o SIGE</h2>

                            <p>O <b>SIGE</b> (<i>Sistema de Gerenciamento de Estoque</i>), é uma solução criada para administrar os insumos e reagentes da <b>Escola Do Vinho</b> do IFSertãoPE Campus Petrolina Zona Rural. O sistema surgiu da necessidade de poder controlar os produtos que chegam e saem do nosso estoque, garantindo assim um fluxo de utilização dos produtos de forma controlada,
                            através de um ambiente de gestão virtual. 
                            </p>

                            <p>E para entender um pouco mais sobre como funciona o SIGE, abaixo está uma explicação mais detalhada de como utilizar o
                                sistema. 
                            </p>

                            <h2>Como usar</h2>

                            <b>Versão do sistema</b>
                            <p>1.0.0</p>
                            
                            <b>Última atualização</b>
                            <p>16/06/2021</p>

                            <b>Desenvolvido por <a href="https://fsspe.petrolina.ifsertao-pe.edu.br/nimbus/" target="_blank">Nimbus</a></b>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 

    @endguest
</main>
@endsection