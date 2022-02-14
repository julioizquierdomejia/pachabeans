@extends('adminlte::page')

@section('title', 'Etiquetas')

@section('content_header')
    <h1>Etiquetas</h1>
@stop

@section('content')
    <p>Crear nueva etiqueta</p>


    <div class="card col-12 col-md-10">
		<div class="card-body">
			<form action="/admin/tag" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-6">
						
						<input type="text" class="form-control" id="valueattribute" name="name" placeholder="Etiqueta" value="{{ old('name') }}">
						@error('name')
						<div>
							<small class="text-danger">* {{ $message }}</small>
						</div>
						@enderror
					</div>
					<div class="form-group col-md-6">
						<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" value="{{ old('descripcion') }}">
					</div>
				</div>
				
				<div class="form-row">
					<div class="form-group col-md-2">
						<Label>Elige un color</Label>
						<input type="color" class="form-control" id="colorinput" name="color" placeholder="Etiqueta" value="#ffffff">
					</div>
					<div class="form-group col-md-10">
						<Label>Elige una imagen para la Etiqueta</Label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
							</div>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="imagen">
								<label class="custom-file-label" for="inputGroupFile01">Elige Imagen</label>
							</div>
						</div>

					</div>
				</div>

				<button type="submit" class="btn btn-primary"><i class="fas fa-pencil-alt mr-2"></i> Crear Etiqueta</button>
			</form>
		</div>
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
		    
		    $('.custom-file-input').on('change', function(event) {
			    var inputFile = event.currentTarget;
			    $(inputFile).parent()
			        .find('.custom-file-label')
			        .html(inputFile.files[0].name);
			});

		} );
    </script>
@stop