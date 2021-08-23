<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Desafío Lesaffre 2021-Crecé-Aprendé-Ganá</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- ************************* CSS Files ************************* -->

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css')}}">

    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>

    <!-- Preloader Start -->
    <div class="ft-preloader active">
        <div class="ft-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="ft-child ft-bounce1"></div>
            <div class="ft-child ft-bounce2"></div>
            <div class="ft-child ft-bounce3"></div>
        </div>
    </div>
    <!-- Preloader End -->
 
    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Start -->
        <header class="header header-default site-header header-transparent" style="position: inherit;">
            <div class="header__outer">
                <div class="header__inner header--fixed">
                    <div class="container">
                        <div class="header__main">
                            <div class="header__col header__left">
                                <a href="{{ URL::to('/') }}" class="logo">
                                    <figure class="logo--normal">
                                        <img src="{{ asset('assets/img/logo/logo-header.png')}}" alt="Logo">
                                    </figure>
                                    <figure class="logo--transparency">
                                        <img src="{{ asset('assets/img/logo/logo-lesaffre-transparent-119x76.png')}}" alt="Logo">
                                    </figure>
                                </a>
                            </div>
                            <div class="header__col header__center">
                                <nav class="main-navigation d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="mainmenu__item menu-item-has-children position-relative">
                                            <a href="{{ URL::to('/') }}" class="mainmenu__link">Inicio</a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children position-static">
                                            <a href="{{ URL::to('productos') }}" class="mainmenu__link">Productos</a>                                            
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children position-relative">
                                            <a href="{{ URL::to('receta') }}" class="mainmenu__link">Receta</a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children position-relative">
                                            <a href="{{ URL::to('premios') }}" class="mainmenu__link">Premios</a>
                                        </li>
                                    @if (Auth::check())
                                        <li class="mainmenu__item menu-item-has-children position-relative">
                                            <a href="{{ URL::to('distribuidor/index') }}" class="mainmenu__link">Puntaje</a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children position-relative">
                                            <a href="{{ URL::to('eventos') }}" class="mainmenu__link">Eventos</a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children position-relative">
                                            <a href="{{ URL::to('trivia/respuestas') }}" class="mainmenu__link">Trivia</a>
                                        </li>
                                    @endif
                                    </ul>                                   
                                </nav>
                            </div>
                            <div class="header__col header__right">
                                <div class="toolbar-item d-none d-lg-block">
                                    @if (Auth::check())
                                        <a class="css-button-login" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();" style="color: #FFFFFF">
                                                Cerrar Sesión
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    @else
                                        <a href="{{ URL::to('loginview') }}" class="css-button-login" style="color: #FFFFFF">Ingresá</a>
                                    @endif
                                </div> 
                                <div class="toolbar-item d-block d-lg-none">
                                    <a href="#offcanvasnav" class="js-toolbar menu-btn">
                                        <i class="fas fa-bars fa-2x"></i>                                        
                                    </a>
                                </div>                               
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="header-sticky-height"></div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Main Content Wrapper Start -->
    
        <div id="app">
            @yield('content')  
        </div>
    
        <!-- Main Content Wrapper End -->

        <!-- Footer Start-->
        <footer class="footer bg-color pt--70 pt-xs--60" data-bg-color="#f4f8fa">
            <div class="container">
                <div class="row border-bottom pb--60 pb-sm--28 pb-xs--49">
                    <div class="col footer-column-1 mb-sm--42">
                        <div class="footer-widget">
                            <div class="textwidget">
                                <figure class="footer-logo mb--10">
                                    <img src="{{ asset('assets/img/logo/logo-footer.png')}}" alt="Logo">
                                </figure>
                            </div>
                            <div class="address-widget">
                                <address>Jose A .Cabrera 4338, C1414 BGD, Buenos Aires</address>
                            </div>
                        </div>
                    </div>                    
                    <div class="col footer-column-3 mb-sm--33">
                        <div class="footer-widget">
                            <h3 class="widget-title mb--35 mb-sm--15">Desafío Lesaffre 2021</h3>
                            <ul class="footer-menu">
                                <li>
                                    <a href="{{URL::to('bases')}}">
                                        <i class="fa fa-angle-right"></i>
                                        <span>Bases y Condiciones</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{URL::to('productos')}}">
                                        <i class="fa fa-angle-right"></i>
                                        <span>Productos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{URL::to('premios')}}">
                                        <i class="fa fa-angle-right"></i>
                                        <span>Premios</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{URL::to('eventos')}}">
                                        <i class="fa fa-angle-right"></i>
                                        <span>Eventos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{URL::to('contacto')}}">
                                        <i class="fa fa-angle-right"></i>
                                        <span>Contacto</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{URL::to('login')}}">
                                        <i class="fa fa-angle-right"></i>
                                        <span>Ingresá</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>                    
                    <div class="col footer-column-5">
                        <div class="footer-widget">
                            <h3 class="widget-title mb--35 mb-sm--15">Enlaces importantes</h3>
                            <ul class="footer-menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-right"></i>
                                        <span>lesaffreargentina.com.ar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-right"></i>
                                        <span>App Lesaffre</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-right"></i>
                                        <span>info.ar@lesaffre.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row ptb--20">
                    <div class="col-12 text-center">
                        <p class="copyright-text">Desafío Lesaffre &copy; 2021 - Crecé - Aprendé - Ganá</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End-->

        <!-- OffCanvas Menu Start -->
        <aside class="offcanvas-navigation" id="offcanvasnav">
            <div class="offcanvas-navigation__inner">
                <a href="" class="btn-close">
                    <i class="flaticon-cross"></i>
                    <span class="sr-only">Cerrar menú</span>
                </a>
                <div class="offcanvas-navigation__top">
                    <ul class="offcanvas-menu">
                        <li class="has-children">
                            <a href="{{ URL::to('/') }}">
                                <span class="mm-text">Inicio</span>
                            </a>                            
                        </li>
                        <li>  
                            <a href="{{ URL::to('productos') }}">
                                <span class="mm-text">Productos</span>
                            </a>
                        </li>
                        <li class="has-children">
                            <a href="{{ URL::to('receta') }}">
                                <span class="mm-text">Receta</span>
                            </a>                            
                        </li>
                        <li class="has-children">
                            <a href="{{ URL::to('premios') }}">
                                <span class="mm-text">Premios</span>
                            </a>                            
                        </li>
                        @if (Auth::check())
                            <li class="has-children">
                                <a href="{{ URL::to('distribuidor/index') }}">
                                    <span class="mm-text">Puntaje</span>
                                </a>                            
                            </li>
                            <li class="has-children">
                                <a href="{{ URL::to('eventos') }}">
                                    <span class="mm-text">Eventos</span>
                                </a>                            
                            </li>
                            <li>
                                <a href="{{ URL::to('trivia/respuestas') }}">
                                    <span class="mm-text">Trivia</span>
                                </a>
                            </li>
                        @endif
                        <li class="has-children">
                            @if (Auth::check())
                                <a class="css-button-login" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();" style="color: #FFFFFF">                                        
                                <span class="mm-text">Cerrar Sesión</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @else
                                <a href="{{ URL::to('loginview') }}" class="css-button-login" style="color: #FFFFFF">
                                    <span class="mm-text">Ingresá</span>
                                </a>
                                
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <!-- OffCanvas Menu End -->

        
        <!-- Global Overlay Start -->
        <div class="global-overlay"></div>
        <!-- Global Overlay End -->

        <!-- Scroll To Top Start -->
        <a class="scroll-to-top" href=""><i class="fa fa-angle-double-up"></i></a>
        <!-- Scroll To Top End -->
    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="{{asset('assets/js/vendor.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>