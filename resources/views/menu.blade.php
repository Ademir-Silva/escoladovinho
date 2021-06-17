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