<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php $route = Route::current()->uri(); ?>
        @if($route == '/') <?php $route = 'Mueblería Ureña' ?> @endif
        @if($route == 'login') <?php $route = 'Iniciar Sesión' ?> @endif
        @if($route == 'acerca') <?php $route = 'Acerca' ?> @endif
        @if($route == 'contacto') <?php $route = 'Contacto' ?> @endif
        @if($route == 'productos') <?php $route = 'Productos' ?> @endif
        <title>{{ $route }}</title>
    <?php $route2 = Route::current()->uri(); ?>
    <link rel="stylesheet" href="/css/materialize.min.css"/>
	<link rel="stylesheet" href="/css/appMU3.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
	<header>
		<div id="fondo-nav-bar">
            <div class="col s12"> 
                <nav id="nav-bar">
                    <div class="nav-wrapper">
                        <a href="/" style="margin-left: 40px"><img src="/imagenes/logo-headerMU.png" class="logo-urena"></a>
                        <a href="/" data-activates="mobile-demo" class="button-collapse" style="margin-left: 40px"><i class="fa fa-bars"></i></a>
                        <ul class="right hide-on-med-and-down">
                            <li class=@if($route2 == 'productos') {{'opcion-activa'}} @endif>
                                <a href="/productos">Productos</a>
                            </li>
                            <li class=@if($route2 == 'acerca') {{'opcion-activa'}} @endif>
                                <a href="/acerca"><i class="fa fa-question-circle"></i>  Acerca</a>
                            </li>
                            <li class=@if($route2 == 'contacto') {{'opcion-activa'}} @endif>
                                <a href="/contacto"><i class="fa fa-envelope" aria-hidden="true"></i>  Contacto</a>
                            </li>
                            <li class=@if($route2 == 'login') {{'opcion-activa'}} @endif>
                                <a href="/login"><i class="fa fa-sign-in"></i>  Iniciar Sesión</a>
                            </li>
                        </ul>
                        <ul class="side-nav" id="mobile-demo">
                            <li>
                                <a href="/productos">Productos</a>
                            </li>
                            <li>
                                <a href="/acerca"><i class="fa fa-question-circle"></i>  Acerca</a>
                            </li>
                            <li>
                                <a href="/contacto"><i class="fa fa-envelope" aria-hidden="true"></i>  Contacto</a>
                            </li>
                            <li>
                                <a href="/login"><i class="fa fa-sign-in"></i>  Iniciar Sesión</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div> 
        </div>
	</header>

	@yield('content')

    <header>
        <div id="fondo-pie">
            <div class="container"> 
                <div class="row">
                    <div class="col s12">
                        <div class="col s8">
                            <label id="texto-marcas">Somos distribuidores de las mejores marcas</label>
                            <br><br>
                            <center>
                                <div class="col s12">
                                    <div class="col s4">
                                        <img class="img-marcas" src="/imagenes/boal.png">
                                    </div>
                                    <div class="col s4">
                                        <img class="img-marcas" src="/imagenes/lizmueble.png">
                                    </div>
                                    <div class="col s4">
                                        <img class="img-marcas" src="/imagenes/lomalta.png">
                                    </div>
                                </div>
                                <div class="col s12">
                                    <div class="col s4">
                                        <img class="img-marcas1" src="/imagenes/selther.png">
                                    </div>
                                    <div class="col s4">
                                        <img class="img-marcas1" src="/imagenes/spring.png">
                                    </div>
                                    <div class="col s4">
                                        <img class="img-marcas2" src="/imagenes/sealy.png">
                                    </div>
                                </div>
                            </center>
                        </div>
                        <div class="col s4">
                            <center>
                                <div class="cols 12">
                                    <img class="img-pie" src="/imagenes/urena.png">
                                </div>
                                <label id="texto-DRMU">DERECHOS RESERVADOS</label>
                                <br>
                                <label id="texto-DRMU">© 2016 - Mueblería Ureña</label>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="pie"></div>
    </header>


	<script src="/js/jquery-2.2.1.min.js"></script>
	<script src="/js/materialize.min.js"></script>
	<script src="/js/app.js"></script>
    @yield('scripts')
</body>

</html>