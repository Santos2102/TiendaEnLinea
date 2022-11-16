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
                    <a class="nav-link" href="{{ route('shop') }}">TIENDA</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('cart.index') }}" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-pill badge-dark">
                            <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color:#9DA0A2">
                        <ul class="list-group" style="margin: 20px;">
                            @include('partials.cart-drop')
                        </ul>

                    </div>
                </li>

                <li class="nav-item dropdown"> <a href="#"><b> Sucursales</b> </a> 
                <ul>
                    <li><a href="#"><b> Pradera Chimaltenango</b></a></li>
                    <li><a href="#"><b> Pradera Escuintla</b></a></li>
                    <li><a href="#"><b> Las Américas Mazatenango</b></a></li>
                    <li><a href="#"><b> La Trinidad Coatepeque</b></a></li>
                    <li><a href="#"><b> Pradera Xela Quetzaltenango</b></a></li>
                    <li><a href="#"><b> Centro Comercial Miraflores CC</b></a></li>
                </ul>

                </li>

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
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @endguest
                    </ul>
        </div>
    </div>
</nav>