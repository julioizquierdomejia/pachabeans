@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>Sub Categorias</h1>
@stop

@section('content')
    <p>Crear nueva Sub categoría</p>

    <form action="/admin/subcategory" method="POST">
    	@csrf


    	<div class="card col-10">
    		<div class="card-body">
		    	<div class="form-row">
					<div class="form-group col-md-4">
						<label for="inputState">Escoge una categoria</label>
						<select id="inputState" class="form-control select_Category" name='categoria_id'>
							@foreach($categorias as $key)
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
			</div>
		</div>

    	<div class="card col-10">
    		<div class="card-body">
    			<div class="form-row">
					<div class="form-group col-md-6">
						<input type="text" class="form-control" id="subcatagoria" name="name" placeholder="Sub categoria" value="{{ old('name') }}">
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
    		</div>
    	</div>

	  
	  <button type="submit" class="btn btn-primary mt-3"><i class="fas fa-pencil-alt mr-2"></i>Grabar</button>
	</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


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
		    
    		$('.select_Category').select2({
    			theme: 'bootstrap4',
    		});

    		$('.js-example-basic-single').select2();


    </script>
@stop