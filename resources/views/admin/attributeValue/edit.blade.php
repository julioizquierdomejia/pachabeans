@extends('adminlte::page')

@section('title', 'Atributos')

@section('content_header')
    <h1>Atributos</h1>
@stop

@section('content')
    <p>Editar el Valor del Atributo</p>

    <form action=" {{ route('value.update', $atributosValue->id)  }}" method="POST">
    	@method('PUT')
		@csrf

		<div class="card col-10">
    		<div class="card-body">
    			
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="inputState">Escoge un Atributo</label>
						<select id="inputState" class="form-control select_Attribute" name='attribute_id'>
							@foreach($atributos as $key)
								<option value="{{ $key->id }}" {{ $key->id == $atributosValue->attribute_id ? 'selected' : '' }}>
									{{ $key->name }}
								</option>
							@endforeach							
						</select>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<input type="text" class="form-control" placeholder="Nombre de la Categoría" name="name" value="{{ $atributosValue->name }}">
					</div>
					<div class="form-group col-md-6">
						<input type="text" class="form-control" placeholder="Descripción" name="description" value="{{ $atributosValue->description }}">
					</div>
					@error('name')
						<div>
							<small class="text-danger">* {{ $message }}</small>
						</div>
					@enderror
				</div>

				<div class="form-row">
					<div class="form-group col-md-2">
						<Label>Elige un color</Label>
						<input type="color" class="form-control" id="colorinput" name="color" placeholder="Etiqueta" value="{{ $atributosValue->color }}">
					</div>
					<div class="form-group col-md-10">
						<Label>Elige una imagen para la Etiqueta</Label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
							</div>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="imagen">
								<label class="custom-file-label" for="inputGroupFile01">{{ old('imagen', $atributosValue->image ) }}</label>
							</div>
						</div>

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
		    
		    $('.custom-file-input').on('change', function(event) {
			    var inputFile = event.currentTarget;
			    $(inputFile).parent()
			        .find('.custom-file-label')
			        .html(inputFile.files[0].name);
			});

		} );
    </script>
@stop