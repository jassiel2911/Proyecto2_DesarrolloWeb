@extends('layouts.app')
@section('content')


<main class="container perfil main-crear-curso text-md-center">
    <!-- Title -->
    
    <h1 class="mt-4 mt-sm-5 text-purple mb-xl-4">Nuestro perfil</h1>        
    
    <section class="redes">
        <div class="redes" style="display: inline-block;padding: 2vw;">
            <h2>Pamela Espinoza</h2>
            <p>pamelaemc.proteco@gmail.com</p>
            <img class="autor-img " src="{{asset('img/Pamela.jpeg')}}" alt="pam">

        </div>
        <div class="redes" style="display: inline-block;padding: 2vw;">
            <h2>Brian Bautista</h2>
            <p>brianbp.proteco@gmail.com</p>
            <img class="autor-img brian-foto" src="{{asset('img/Brian.jpg')}}" alt="bri">
    
        </div>
    </section>
</main>

@endsection