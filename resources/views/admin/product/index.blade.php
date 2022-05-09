@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
    <p>Listado de Productos</p>


    <div class="card">
    	<div class="card-body">
    		<a href="{{ route('product.create') }}" class="btn btn-primary">Crear Nuevo Producto</a>
    	</div>
    </div>
    <div class="card">
    	<div class="card-body">
    		<table id="products_table" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Descuento</th>
                <th>Stock</th>
                <th>Destacar</th>
                <th>Recomendar</th>
                <th>Status</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Descuento</th>
                <th>Stock</th>
                <th>Destacar</th>
                <th>Recomendar</th>
                <th>Status</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </tfoot>

        <tbody>
        	@foreach($productos as $key)
	            <tr>
	                <td class="align-middle">{{ $key->name }}</td>
	                <td class="align-middle">{{ $key->price }}</td>
	                <td class="align-middle">{{ $key->offer ? $key->offer : 'No hay descuento'}}</td>
	                <td class="align-middle">{{ $key->stock }}</td>
	                
	                <td class="align-middle"> {{-- switch para Outstanding --}}
	                	<form action="" method="POST">
	                		@csrf
		                	<div class="custom-control custom-switch">
							  <input type="checkbox" class="custom-control-input check_out" id='{{'out' . $key->id}}' data-idUser="{{$key->id}}" data-nameUser="{{$key->name}}" {{ $key->outstanding == 0 ? 'checked' : '' }}>
							  <label class="custom-control-label" for="{{'out' . $key->id}}"></label>
							</div>
						</form>
	                </td class="align-middle">

	                <td class="align-middle"> {{-- switch para Recommended --}}
	                	<form action="" method="POST">
	                		@csrf
		                	<div class="custom-control custom-switch">
							  <input type="checkbox" class="custom-control-input check_r" id='{{'r' . $key->id}}' data-idUser="{{$key->id}}" data-nameUser="{{$key->name}}" {{ $key->recommended == 0 ? 'checked' : '' }}>
							  <label class="custom-control-label" for="{{'r' . $key->id}}"></label>
							</div>
						</form>
	                </td class="align-middle">

	                <td class="align-middle"> {{-- switch para Status --}}
	                	<form action="" method="POST">
	                		@csrf
		                	<div class="custom-control custom-switch">
							  <input type="checkbox" class="custom-control-input check" id='{{$key->id}}' data-idUser="{{$key->id}}" data-nameUser="{{$key->name}}" {{ $key->status == 0 ? 'checked' : '' }}>
							  <label class="custom-control-label" for="{{$key->id}}"></label>
							</div>
						</form>
	                </td class="align-middle">
	                {{-- 
	                <td class="align-middle"><img src="{{ $key->uri_image_banner.$key->image_banner ? $key->uri_image_banner.$key->image_banner : 'https://picsum.photos/120/40' }}" alt="" width="100" height="80"></td>
	                 --}}
	                <td class="align-middle"><img src="{{ $key->uri_image_banner.$key->image_banner }}" alt="" width="100" height="80"></td>
	                <td class="align-middle">
	                	<a href="{{ route('product.edit', $key->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
	                	<a href="" class="btn btn-info"><i class="fas fa-plus"></i></a>
	                	<a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
	                </td>
	            </tr>
	        @endforeach
        </tbody>
    </table>
    	</div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">

	<style>
		.sweetAlert {
			font-size: 8px!important;
		}
	</style>	
@stop

@section('js')

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>

	<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>

	<script>

    	$(document).ready(function() {
		    $('#products_table').DataTable({
		    	responsive:true,
		    	autoWhidth:false
		    });

		    //$(document).on('change', '#checkStatus', function(e){
		    //$("#checkStatus").on( 'change', function() {

		    // *****************************************
		    //
		    // modificar el Status del elemento
		    //
		    // *****************************************
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
	                url: "{{ route('product.updateStatus') }}",
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
					  title: 'El producto ' + name + ' ha sido ' + message,
					  showConfirmButton: false,
					  timer: 1500,
					})
	            })

			});

			// **************************************************
		    //
		    // modificar el switch com producto recomendado
		    //
		    // **************************************************
		    $(".custom-switch .check_r").on( 'change', function() {
		    	
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
	                url: "{{ route('product.updateRecommended') }}",
	                method: 'POST',
	                data:{
	                    _token:$('input[name="_token"]').val(),
	                    recommended: valorCheck,
	                    id: id,
	                }
	            }).done(function(res){

	            	if(valorCheck == 0){
	            		message = 'Saldra en la sección Recomendado';
	            	}else{
	            		message = 'No estara en la sección recomendada';
	            	}

	                Swal.fire({
					  position: 'bottom-end',
					  icon: 'success',
					  title: 'El producto ' + name + message,
					  showConfirmButton: false,
					  timer: 3000,
					})
	            })

			});

			// **************************************************
		    //
		    // modificar el switch com producto Destacado del mes
		    //
		    // **************************************************
		    $(".custom-switch .check_out").on( 'change', function() {
		    	
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
	                url: "{{ route('product.updateOutstanding') }}",
	                method: 'POST',
	                data:{
	                    _token:$('input[name="_token"]').val(),
	                    outstanding: valorCheck,
	                    id: id,
	                }
	            }).done(function(res){

	            	if(valorCheck == 0){
	            		message = ' Es destacado';
	            	}else{
	            		message = ' Ya no es destacado';
	            	}

	                Swal.fire({
					  position: 'bottom-end',
					  icon: 'success',
					  title: 'El producto ' + name + message,
					  showConfirmButton: false,
					  timer: 3000,
					})
	            })

			});

			

			//para que el input tipo file coga el nombre
			$('.custom-file-input').on('change', function(event) {
			    var inputFile = event.currentTarget;
			    $(inputFile).parent()
			        .find('.custom-file-label')
			        .html(inputFile.files[0].name);
			});

			// crear por ajax valores para los aatributos
			//primero colocamos el titulo del atributo al modal

			$('.btn_value').click(function(){
				//$('#modalAttri').html('Atributo ' + $(this).attr('data-name'));
				$('#attribute_id').val($(this).attr('id'));

				$('#title_form').html('Atributo ' + $(this).attr('data-name'));
			})


		} );
    </script>
@stop