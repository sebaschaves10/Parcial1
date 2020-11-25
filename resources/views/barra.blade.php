<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <img src="{{url('img/logo.png')}}" height="50">
    <br>
    <a class="navbar-brand" href="{{ url('/') }}"> Quiero a mi Mascota</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/informativo') }}"> Empresa <span class="sr-only">(current)</span></a>
            </li>
           
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Catálogo
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ url('/catalogo') }}">General</a>
                    
                    <a class="dropdown-item" href="{{ url('/catalogo/perros') }}">Seccion Perros</a>
                    <a class="dropdown-item" href="{{ url('/catalogo/gatos') }}">Seccion Gatos</a>
                    <a class="dropdown-item" href="{{ route('registrarPro') }}">Compras</a>
                </div>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/servicios/contacto') }}"> Contacto <span class="sr-only">(current)</span></a>
            </li>
            
        </ul>
    </div>
</nav>