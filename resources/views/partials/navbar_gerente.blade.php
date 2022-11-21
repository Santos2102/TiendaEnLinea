<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Store Online S.A.
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Reportes</a>
                </li>

                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"    aria-expanded="false">
                        Top 100 de productos más vendidos
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/top100">General</a>
                        <a class="dropdown-item" href="/top100PraderaChimaltenango">Pradera Chimaltenango</a>
                        <a class="dropdown-item" href="/top100PraderaEscuintla">Pradera Escuintla</a>
                        <a class="dropdown-item" href="/top100Mazatenango">Las Américas Mazatenango</a>
                        <a class="dropdown-item" href="/top100LaTrinidad">La Trinidad Coatepeque</a>
                        <a class="dropdown-item" href="/top100PraderaXela">Pradera Xela Quetzaltenango</a>
                        <a class="dropdown-item" href="/top100Miraflores">Centro Comercial Miraflores CC</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
        </div>


            </ul>
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>