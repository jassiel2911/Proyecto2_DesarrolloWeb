@extends('layouts.app')
@section('content')
<main class="container pb-5 mb-5">
		<!-- Title -->
		<!-- Title -->
		<h1 class="display-1">{{$tarea->title}}</h1>
		<h2>Experiencia</h2>
		<hr>
		<div class="mt-md-4 mt-4">
			<img src="{{asset("tareas/$tarea->file")}}" class="rounded mx-auto d-block imagen" alt="...">
		</div>
		<div class="mt-md-4 mt-4">
			<h2 class="text-justify">{{$tarea->description}}</h2>
			<p class="text-justify">{{$tarea->new}}</p>
		</div>
		<footer>
			<h6 class="text-right">Autor: <a href="{{route('autor')}}">{{Auth::user()->name}}</a></h6>
		</footer>
		<div id="loudvoice-container"></div>
 		<form action="{{route('entrega.store')}}" id="frmComment" method="POST">
		 @csrf
 		   <!--<div class="row">
 		      <label> Nombre: </label> <span id="name-info"></span><input class="form-field" id="name" type="text" name="user"> 
 		   </div>-->
 		   <div class="row">
				<td>
				<input type="text" class="d-none" name="tarea_id" value="{{$tarea->id}}">
				</td>
 		      <label for="mesg"> Mensaje : <span id="message-info"></span></label>
 		      <textarea class="form-field" id="comments" name="comments" rows="4"></textarea>   
 		   </div>
 		   <div class="row">
 		      <input type="hidden" name="add" value="post" />
 		      <button type="submit" name="submit" id="submit" class="btn-add-comment bg-green">Añadir Comentario</button>
 		     </div>
 		  </form>
		
		   <section class="entregas mt-5">
		<h1>Comentarios</h1>
		<table class="table table-hover ml-4 mt-4">
			<thead class="bg-lpurple">
				<tr>
					<th scope="col">Usuario</th>
					<th scope="col">Comentario</th>
				</tr>
			</thead>
			<tbody>
				@foreach($entregas as $entregas)
				@if($entregas->tarea_id==$tarea->id)
				<tr>
					<td>{{$entregas->user->name}}</td>
						<td>
							<p>{{$entregas->comments}}</p>
						</td>
					</form>
				</tr>
				@endif
				@endforeach
			</tbody>
		</table>
	</section>
	
	</main>
@endsection