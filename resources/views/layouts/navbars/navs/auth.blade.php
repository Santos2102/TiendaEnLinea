<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="/">{{ __('Compra todo lo que deseas') }}</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                @if(auth()->user()->email!="Admin@gmail.com" && auth()->user()->email!="Gerente@gmail.com")
                <li class="nav-item btn-rotate dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('cart.index') }}"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-pill badge-dark">
                            <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                        style="width: 450px; padding: 0px; border-color:#9DA0A2">
                        <ul class="list-group" style="margin: 20px;">
                            @include('partials.cart-drop')
                        </ul>

                    </div>
                </li>
                @endif


                <li class="nav-item btn-rotate dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="nc-icon nc-settings-gear-65"></i>
                        <p>
                            <span class="d-lg-none d-md-block">{{ __('Account') }}</span>
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink2">
                        <form class="dropdown-item" action="{{ route('logout') }}" id="formLogOut" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" onclick="document.getElementById('formLogOut').submit();">{{ __('Cerrar sesión') }}</a>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Mi perfil') }}</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
