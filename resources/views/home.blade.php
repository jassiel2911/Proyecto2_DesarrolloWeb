@extends('layouts.app')

@section('content')
<main class="container">
<br>
<br>

<div class="home-title row">
    <div class="home-title_text pl-3 mr-5">
        <h1 class="mt-4 mt-sm-5 text-ydark ">Conoce las mejores opciones para Viajar</h1>
        <p>Blog de Viajes</p>
    </div>
    
</div>
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
            <section class="redes">
                <div class="redes" style="display: inline-block;padding: 2vw;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98360.72951072111!2d-99.1280514071814!3d19.43561819881024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fc77bd93229f%3A0x2d07ef561bad244!2sAeropuerto%20Internacional%20de%20la%20Ciudad%20de%20M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1610177581735!5m2!1ses-419!2smx" width="300" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
                </div>
                <div class="redes" style="display: inline-block;padding: 2vw;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/QBsnXMZjdGQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
                </div>
            </section>
</main>
@endsection
