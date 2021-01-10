<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Viajes') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Estilos -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/styles.css')}}">
	<link rel="stylesheet" href="{{asset('css/mediaqueries.css')}}">
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">

</head>
<body>
<header class="home_header" >
<nav class="navbar navbar-expand-lg navbar-light  px-lg-5 py-2">
				<a class="navbar-brand d-flex pl-xl-5 " href="{{url('/')}}">
					<i class="nav-home"><img src="{{asset('img/icons8-enviado-64.png')}}" alt="avion"></i>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo01" class="pr-5">
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="{{url('/')}}">Inicio <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="{{route('viajes')}}">Nacionales <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="{{route('viajes')}}">Internacionales <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown mr-4">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							{{Auth::user()->name}}
							</a>
	                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
								@if(Auth::user()->admin)
								<a class="dropdown-item" href="{{route('admintareas.index')}}">Admin</a>
								@endif
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">Cerrar sesión</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</div>
						</li>
					</ul>
				</div>
			</nav>
	</header>

    <main>
    @yield('content')
    </main>
	<footer class="fin" style="padding: 5vw;">
		<div class="container nueva_clase" style="text-align: center;">
		<a href="https://www.facebook.com/dat.un.break1/">
			<img src="{{asset('img/face.png')}}" alt="face" class="imagen1" width="100" height="100" style="display: inline-block">
		</a>
			&emsp; &emsp;
		<a href="https://www.instagram.com/aeromexico/?hl=es-la">
			<img src="{{asset('img/insta.png')}}" alt="insta" class="imagen2" width="100" height="100" style="display: inline-block">
		</a>
			&emsp; &emsp;
		<a href="https://twitter.com/TravelNbook?s=08">
			<img src="{{asset('img/twitter.jpg')}}" alt="twitter" class="imagen3" width="100" height="100" style="display: inline-block">
		</a>

        </div>
    </footer>
</body>
</html>
