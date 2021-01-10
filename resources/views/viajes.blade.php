@extends('layouts.app')
@section('content')

<main class="container">
		
		<hr>
		<!-- Cursos <0 -->
		<div class="cursos-index cursoadmin-index mt-4">
			<div class="row row-cols-1 row-cols-lg-2 ">
				<!-- Card 1 -->
                @foreach($tareas as $tarea)
				<div class="col mb-4">
					<div class="card h-100 bg-yellow p-3 p-xl-4">
						<div class="home-cursos_titulo">
							<h2 class="card-title pt-1 pl-2">{{$tarea->title}}</h2>
							<h3 class="pl-2">{{$tarea->date}} a las {{$tarea->time}}</h3>
						</div>
						<hr>
						<p class="card-text">{{$tarea->description}}</p>
						<a class="card-text pb-3" target="_blank" href="">{{$tarea->file}}</a>
						<div class="cursoadmin-index_botones d-flex">
							<a class="bg-lpurple mr-md-3" href="{{route('admintareas.show',$tarea->id)}}">Ver Publicacion</a>
						</div>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</main>




@endsection

