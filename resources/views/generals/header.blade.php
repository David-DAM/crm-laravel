
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">Home</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('web.users.index') }}">Usuarios</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Compras</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="{{ route('web.products.index') }}">Productos</a>
                    <a class="dropdown-item" href="#">Pedidos</a>
                </div>
            </li>
        </ul>
        <form method="POST" action="{{ route('home') }}" class="form-inline my-2 my-lg-0">
            @csrf
            <button type="submit" class="btn btn-primary">Cerrar sesión</button>
        </form>
    </div>
</nav>
