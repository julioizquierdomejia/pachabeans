@extends('adminlte::page')

@section('title', 'Documento')

@section('content_header')
    <h1>Documento</h1>
@stop

@section('content')
    <p>Editar Documento</p>

    <form action="/admin/document/{{ $documento->id }}" method="POST">
    	@method('PUT')
		@csrf
	  <div class="card col-10">
		<div class="card-body">
			<div class="form-row">
				<div class="form-group col-md-6">
				<input type="text" class="form-control" placeholder="Nombre del documento / (Factura / Boleta / etc)" name="name" value="{{ old('name', $documento->name) }}">
				@error('name')
					<div>
						<small class="text-danger">* {{ $message }}</small>
					</div>
				@enderror
				</div>
			<div class="form-group col-md-6">
				<input type="text" class="form-control" placeholder="Descripción" name="description" value="{{ old('description', $documento->descripcion) }}">
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