<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Blog de viajes') }}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/mediaqueries.css')}}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <!--Home PR2-->
    @extends('layouts.app')

    @section('content')
    <main class="container">
        <div class="cursos-index mt-4">

            <div id="carouselExampleControls" class="carousel slide welcome_carousel" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="imag" src="{{asset('img/foto1.jpeg')}}" class="d-block " alt="general">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/foto2.jpeg')}}" class="d-block " alt="personas">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/foto3.jpeg')}}" class="d-block " alt="tulum">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <br>
            <br>
            <div class="info">
                <h1 class="titulo-viajes">Viajes</h1>
                <p class="">
                <h2>
                    ¿Buscas un lugar donde relajarte?
                </h2>
                ¡Estás en el lugar indicado!
                <br>
                En este sitio web podrás encontrar los mejores lugares para poder vacacionar
                después de un intenso periodo de trabajo.

                </p>

                <br>

                <h1 class="titulo-viajes"> Post Recientes </h1>
                <div class="post">
                    Pendiente
                </div>
            </div>
            <br>
            <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98360.72951072111!2d-99.1280514071814!3d19.43561819881024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fc77bd93229f%3A0x2d07ef561bad244!2sAeropuerto%20Internacional%20de%20la%20Ciudad%20de%20M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1610177581735!5m2!1ses-419!2smx" width="300" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
            </div>
            <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/QBsnXMZjdGQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>

            </div>
    </main>
    @endsection
    <footer class="fin">

    </footer>
</body>

</html>
