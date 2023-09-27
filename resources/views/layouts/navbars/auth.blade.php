<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/logo-small.png">
            </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            {{ __('TECSP') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="">
                <a href="{{ route('shop') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Productos') }}</p>
                </a>
            </li>
            
            <li class="">
                <a data-toggle="collapse" aria-expanded="true" href="#3">
                    <i class="nc-icon"><img src="{{ asset('paper/img/laravel.svg') }}"></i>
                    <p>
                            {{ __('Productos gerente') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="3">
                    <ul class="nav">
                        <li class="">
                        <a class="dropdown-item" href="/gerente">
                            <span class="sidebar-mini-icon">{{ __(' VER ') }}</span>
                                <span class="sidebar-normal">{{ __(' VER ') }}</span>
                            </a>
                            <a class="dropdown-item" href="{{route('gerente.create')}}">
                            <span class="sidebar-mini-icon">{{ __(' CREA ') }}</span>
                                <span class="sidebar-normal">{{ __(' CREAR ') }}</span>
                            </a>
                          

                        </li>
                    </ul>
                </div>
            </li>


            <li class="">
                <a href="/ExistenciaMenor10">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Baja existencia') }}</p>
                </a>
            </li>

            <li class="">
                <a data-toggle="collapse" aria-expanded="true" href="#3">
                    <i class="nc-icon"><img src="{{ asset('paper/img/laravel.svg') }}"></i>
                    <p>
                            {{ __('Ventas') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="3">
                    <ul class="nav">
                        <li class="">
                            <a class="dropdown-item" href="/VentasGeneral">
                            <span class="sidebar-mini-icon">{{ __(' TOP ') }}</span>
                                <span class="sidebar-normal">{{ __(' GENERAL ') }}</span>
                            </a>
                        <a class="dropdown-item" href="/ventasChimaltenango">
                            
                        <span class="sidebar-mini-icon">{{ __(' TOP ') }}</span>
                                <span class="sidebar-normal">{{ __(' CHIM ') }}</span>
                        </a>
                        <a class="dropdown-item" href="/ventasEscuintla">
                        <span class="sidebar-mini-icon">{{ __(' TOP ') }}</span>
                                <span class="sidebar-normal">{{ __(' ESC ') }}</span>
                        </a>
                        <a class="dropdown-item" href="/ventasMazatenango">
                        <span class="sidebar-mini-icon">{{ __(' TOP ') }}</span>
                                <span class="sidebar-normal">{{ __(' MAZA ') }}</span>
                        </a>
                        <a class="dropdown-item" href="/ventasCoatepeque">
                        <span class="sidebar-mini-icon">{{ __(' TOP ') }}</span>
                                <span class="sidebar-normal">{{ __(' LA TRN ') }}</span>
                        </a>
                        <a class="dropdown-item" href="/ventasXela">
                        <span class="sidebar-mini-icon">{{ __(' TOP ') }}</span>
                                <span class="sidebar-normal">{{ __(' XELA ') }}</span>
                        </a>
                        <a class="dropdown-item" href="/ventasMiraflores">
                        <span class="sidebar-mini-icon">{{ __(' TOP  ') }}</span>
                                <span class="sidebar-normal">{{ __(' MRFL ') }}</span>
                        </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="">
                <a data-toggle="collapse" aria-expanded="true" href="#1">
                    <i class="nc-icon"><img src="{{ asset('paper/img/laravel.svg') }}"></i>
                    <p>
                            {{ __('Top de productos') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="1">
                    <ul class="nav">
                        <li class="">
                            <a class="dropdown-item" href="/top100">
                            <span class="sidebar-mini-icon">{{ __(' TOP 100 ') }}</span>
                                <span class="sidebar-normal">{{ __(' GENERAL ') }}</span>
                            </a>
                        <a class="dropdown-item" href="/top100PraderaChimaltenango">
                            
                        <span class="sidebar-mini-icon">{{ __(' TOP 100 ') }}</span>
                                <span class="sidebar-normal">{{ __(' CHIM ') }}</span>
                        </a>
                        <a class="dropdown-item" href="/top100PraderaEscuintla">
                        <span class="sidebar-mini-icon">{{ __(' TOP 100 ') }}</span>
                                <span class="sidebar-normal">{{ __(' ESC ') }}</span>
                        </a>
                        <a class="dropdown-item" href="/top100Mazatenango">
                        <span class="sidebar-mini-icon">{{ __(' TOP 100 ') }}</span>
                                <span class="sidebar-normal">{{ __(' MAZA ') }}</span>
                        </a>
                        <a class="dropdown-item" href="/top100LaTrinidad">
                        <span class="sidebar-mini-icon">{{ __(' TOP 100 ') }}</span>
                                <span class="sidebar-normal">{{ __(' LA TRN ') }}</span>
                        </a>
                        <a class="dropdown-item" href="/top100PraderaXela">
                        <span class="sidebar-mini-icon">{{ __(' TOP 100 ') }}</span>
                                <span class="sidebar-normal">{{ __(' XELA ') }}</span>
                        </a>
                        <a class="dropdown-item" href="/top100Miraflores">
                        <span class="sidebar-mini-icon">{{ __(' TOP 100 ') }}</span>
                                <span class="sidebar-normal">{{ __(' MRFL ') }}</span>
                        </a>
                        </li>
                    </ul>
                </div>
            </li>
            
            <li class="">
                <a data-toggle="collapse" aria-expanded="true" href="#2">
                    <i class="nc-icon"><img src="{{ asset('paper/img/laravel.svg') }}"></i>
                    <p>
                            {{ __('Ventas mensuales') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="2">
                    <ul class="nav">
                        <li class="">
                            <a class="dropdown-item" href="/ProductoVendidoMes">
                            <span class="sidebar-mini-icon">{{ __(' TOP ') }}</span>
                                <span class="sidebar-normal">{{ __(' GENERAL ') }}</span>
                            </a>
                        <a class="dropdown-item" href="/ProductoVendidoMesChimaltenango">
                            
                        <span class="sidebar-mini-icon">{{ __(' TOP ') }}</span>
                                <span class="sidebar-normal">{{ __(' CHIM ') }}</span>
                        </a>
                        <a class="dropdown-item" href="/ProductoVendidoMesEscuintla">
                        <span class="sidebar-mini-icon">{{ __(' TOP ') }}</span>
                                <span class="sidebar-normal">{{ __(' ESC ') }}</span>
                        </a>
                        <a class="dropdown-item" href="/ProductoVendidoMesMazatenango">
                        <span class="sidebar-mini-icon">{{ __(' TOP ') }}</span>
                                <span class="sidebar-normal">{{ __(' MAZA ') }}</span>
                        </a>
                        <a class="dropdown-item" href="/ProductoVendidoMesCoatepeque">
                        <span class="sidebar-mini-icon">{{ __(' TOP ') }}</span>
                                <span class="sidebar-normal">{{ __(' LA TRN ') }}</span>
                        </a>
                        <a class="dropdown-item" href="/ProductoVendidoMesXela">
                        <span class="sidebar-mini-icon">{{ __(' TOP ') }}</span>
                                <span class="sidebar-normal">{{ __(' XELA ') }}</span>
                        </a>
                        <a class="dropdown-item" href="/ProductoVendidoMesMiraflores">
                        <span class="sidebar-mini-icon">{{ __(' TOP  ') }}</span>
                                <span class="sidebar-normal">{{ __(' MRFL ') }}</span>
                        </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
