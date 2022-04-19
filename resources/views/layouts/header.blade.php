<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo-Site</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Noticias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre nós</a>
        </li>

        {{-- Convidado (Usuário logar) --}}
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Entrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Cadastre-se</a>
        </li>
        @endguest

        {{-- Usuario Logado --}}
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuário
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="nav-link">{{ Auth::user()->name }}</a></li>
            <li><a class="nav-link">{{ Auth::user()->email }}</a></li>

            {{-- Logout --}}            
            <li class="nav-item">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();
                this.closest('form').submit();">Sair</a>
              </form>
            </li>
          </ul>
        </li>
        @endauth
      </li>
    </ul>
  </div>
</div>
</nav>