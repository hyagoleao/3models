<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="../assets/img/logos/logo.png" alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">Quem Somos</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{ url('/models') }}" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Modelos</a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ url('/man') }}">Masculino</a></li>
                    <li><a class="dropdown-item" href="{{ url('/woman') }}">Feminino</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{ url('/newfaces')  }}" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">New Faces</a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ url('/newMan') }}">Masculino</a></li>
                    <li><a class="dropdown-item" href="{{ url('/newWoman') }}">Feminino</a></li>
                </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contato</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/singin') }}">Cadastre-se</a></li>
            </ul>
        </div>
    </div>
</nav>
