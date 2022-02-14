@extends('adminlte::page')

@section('title', 'Etiquets')

@section('content_header')
    <h1>Etiquetas</h1>
@stop

@section('content')
    <p>Listado de Etiquetas</p>

    <div class="card">
    	<div class="card-body">
    		<a href="{{ route('tag.create') }}" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Nueva Etiqueta</a>
    	</div>
    </div>
    

    <div class="row row-cols-1 row-cols-md-4">
	  @foreach($etiquetas as $key)
	  	<div class="col mb-4">
		    <div class="card">
				<div class="card-header">
					<h5 class="card-title font-weight-bold text-info">{{ $key->name }}</h5>
				</div>
		      	<div class="">
		      		<img src="{{ $key->uri_image }}{{ $key->image }}" width="80" height="80" alt="{{ $key->name }}" class="mx-auto">
		      	</div>
		      	
		      <div class="card-body">
		        {{-- <p class="card-text">{{ $key->description }}</p> --}}

		        <form action="" method="POST">
	        		@csrf
	            	<div class="custom-control custom-switch">
					  <input type="checkbox" class="custom-control-input check" name='status' id='{{$key->id}}' data-idUser="{{$key->id}}" data-nameUser="{{$key->name}}" {{ $key->status == 0 ? 'checked' : '' }}>
					  <label class="custom-control-label labelStatus" for="{{$key->id}}">{{ $key->status == 0 ? 'Activo' : 'Inactivo' }}</label>
					</div>
				</form>

		      </div>

		      <div class="card-footer">
				<div class="d-flex align-items-center mt-2">
				<a href="{{ route('tag.edit', $key->id) }}" class="btn btn-warning"><i class="fas fa-edit mr-2"></i>Editar</a>
					<form method="POST" action="{{ url("admin/tag/{$key->id}") }}">
						@csrf
  						@method('DELETE')
						<button type="submit" class="btn btn-danger ml-2"><i class="far fa-trash-alt"></i></button>
					</form>
				</div>
			</div>

		    </div>
		  </div>
	  @endforeach
	</div>

	
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
@stop

@section('js')

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>

	<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>

    	$(document).ready(function() {
		    $('#category_table').DataTable({
		    	responsive:true,
		    	autoWhidth:false
		    });

		    //$(document).on('change', '#checkStatus', function(e){
		    //$("#checkStatus").on( 'change', function() {

		    $(".custom-switch .check").on( 'change', function() {
		    	
		    	parent = $(this).parent();

		    	id = $(this).attr('data-idUser');
		    	name = $(this).attr('data-nameUser');

			    if( $(this).is(':checked') ) {
			        valorCheck = 0;
			    } else {
			        // Hacer algo si el checkbox ha sido deseleccionado
			        valorCheck = 1;
			    }



			    $.ajax({
	                url: "{{ route('tag.updateStatus') }}",
	                method: 'POST',
	                data:{
	                    _token:$('input[name="_token"]').val(),
	                    status: valorCheck,
	                    id: id,
	                }
	            }).done(function(res){

	            	if(valorCheck == 0){
	            		message = 'Activado';
	            	}else{
	            		message = 'Desactivado';
	            	}

	                Swal.fire({
					  position: 'bottom-end',
					  icon: 'success',
					  title: 'La categoria ' + name + ' ha sido ' + message,
					  showConfirmButton: false,
					  timer: 1500
					})

	            })

			});



		} );
    </script>
@stop