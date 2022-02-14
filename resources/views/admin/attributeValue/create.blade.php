@extends('adminlte::page')

@section('title', 'Atributo')

@section('content_header')
    <h1>Valores de Atributos</h1>
@stop

@section('content')
    <p>Crear nuevo Valor de atributo</p>

    	
	<div class="card">
		<div class="card-body">
			<form action="{{ route('value.store') }}" method="POST" enctype="multipart/form-data">
				@csrf

				<div class="card col-10">
    				<div class="card-body">

    					<div class="form-row">
							<div class="form-group col-md-4">
								<label for="inputState">Escoge un Atributo</label>
								<select id="inputState" class="form-control select_Attribute" name='attribute_id'>
									@foreach($atributos as $key)
										<option value="{{ $key->id }}">{{ $key->name }}</option>
									@endforeach							
								</select>
								@error('name')
									<div>
										<small class="text-danger">* {{ $message }}</small>
									</div>
								@enderror
							</div>
						</div>

    					<div class="form-row">
							<div class="form-group col-md-6">
								<input type="text" class="form-control" id="valueattribute" name="name" placeholder="Ingrese un valor" value="{{ old('name') }}">
								@error('name')
									<div>
										<small class="text-danger">* {{ $message }}</small>
									</div>
								@enderror
							</div>
							<div class="form-group col-md-6">
								<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese descripción" value="{{ old('description') }}">
							</div>
						</div>

						<div class="form-row">
			          		<div class="form-group col-md-2">
					            <input type="color" class="form-control" id="color" name="color" placeholder="Color" value='{{ old('color') }}'>
					        </div>
			          		<div class="form-group col-md-10">
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
    				</div>
    			</div>
				
				<button type="submit" class="btn btn-primary">Crear Valor</button>
			</form>
		</div>
	</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
@stop

@section('js')

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>

	<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script>

    	$(document).ready(function() {
		    
    		$('.select_Attribute').select2({
    			theme: 'bootstrap4',
    		});

    		//para que el input tipo file coga el nombre
			$('.custom-file-input').on('change', function(event) {
			    var inputFile = event.currentTarget;
			    $(inputFile).parent()
			        .find('.custom-file-label')
			        .html(inputFile.files[0].name);
			});

		} );
    </script>
@stop