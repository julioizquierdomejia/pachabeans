@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')
    <p>Editar categoría</p>

    <form action="/admin/category/{{ $categoria->id }}" method="POST">
    	@method('PUT')
		@csrf
	  
	  <div class="card col-10">
    		<div class="card-body">
    			<div class="form-row">
					<div class="form-group col-md-6">
						
						<input type="text" class="form-control" id="catagoria" name="name" placeholder="Categoria" value="{{ old('name', $categoria->name) }}">
						@error('name')
						<div>
							<small class="text-danger">* {{ $message }}</small>
						</div>
						@enderror
					</div>
					<div class="form-group col-md-6">
						<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" value="{{ old('descripcion', $categoria->descripcion) }}">
					</div>
				</div>
    		</div>
    	</div>

	  <button type="submit" class="btn btn-primary mt-3"><i class="fas fa-pencil-alt mr-2"></i>Editar</button>
	</form>

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
		    

		} );
    </script>
@stop