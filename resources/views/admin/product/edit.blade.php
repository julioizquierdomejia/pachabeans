@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1 id="title_producto">Producto - </h1>
@stop

@section('content')

    <form action="{{ route('product.update', $producto) }}" method="POST" enctype="multipart/form-data">
    <div class="row p-5">    
	    <div class="card col-12 col-md-12"> {{-- INICIO de Card de datos principales --}}
			<div class="card-body">
				@csrf
				@method('PUT')
				<div class="form-row">
					<div class="form-group col-md-10">
						<Label>Nombre del Producto</Label>
						<input type="text" class="form-control" id="nameProduct" name="name" placeholder="Producto" value="{{ old('name', $producto->name) }}">
						@error('name')
						<div>
							<small class="text-danger">* {{ $message }}</small>
						</div>
						@enderror
					</div>
				</div>

				<div class="row">
					<div class="col-10">
						
						<div class="form-row">
							<div class="form-group col-md-4">
								<Label>Precio del producto</Label>
								<input type="number" class="form-control" id="valueattribute" name="price" placeholder="Precio" value="{{ old('price', $producto->price) }}" min="0" value="0" step=".01" pattern="^\d*(\.\d{0,2})?$">
								@error('price')
								<div>
									<small class="text-danger">* {{ $message }}</small>
								</div>
								@enderror
							</div>

							<div class="form-group col-md-4">
								<Label>Precio de Oferta</Label>
								<input type="number" class="form-control" id="valueattribute" name="offer" placeholder="Precio con descuento" value="{{ old('offer', $producto->offer) }}" min="0" value="0" step=".01" pattern="^\d*(\.\d{0,2})?$">
								@error('offer')
								<div>
									<small class="text-danger">* {{ $message }}</small>
								</div>
								@enderror
							</div>

							<div class="form-group col-md-4">
								<Label>Stock</Label>
								<input type="text" class="form-control" id="valueattribute" name="stock" placeholder="Stock" value="{{ old('stock', $producto->stock) }}">
								@error('stock')
								<div>
									<small class="text-danger">* {{ $message }}</small>
								</div>
								@enderror
							</div>
						</div>
						
					</div>
				</div>


				<div class="card col-12 col-md-12 p-0"> {{-- Valores de atributos para Productos --}}
				<div class="card-header" id='title-attr_o'>
					<h5>Atributos disponibles</h5>
				</div>
				<div class="card-body">
					{{-- Preguntamos por cada atributo si tiene valores --}}
					@foreach($atributos as $at)
						<h6><i class="fas fa-tags"></i> {{ $at->name }}</h6>

						<div class="my-3 ml-4 border-left border-info pl-2">
							@foreach($atributos_valores as $at_v)
								@if($at->id == $at_v->attribute_id)
									<!--a href="#" class="badge badge-pill badge-primary px-3 py-1 btn-attr"-->

									<div class="form-check">
										<input class="form-check-input btn-attr"
											type="checkbox"
											value=""
											id="{{ $at_v->id }}"
											name="attr"
												{{-- Revisamos los atributos que tiene el producto para meterle Check--}}
												@foreach($values_a as $key) 
													@if($key == $at_v->id)
														checked 
													@endif	
												@endforeach	
											>
										<label class="form-check-label badge badge-pill badge-primary px-3 py-1" for="defaultCheck1">
										{{ $at_v->name }}
										</label>
									</div>
										
										

									</a>
								@endif
							@endforeach	
						</div>
					@endforeach
					
				</div>
			</div>

			{{-- /Campos oculto para enviar array de valore de atributos para cada producto creado/ --}}
			<input type="hidden" name="attr" id="idAttr" value="{{ $values }}">

				<div class="form-row">
					<div class="form-group col-md-10">
				        <div class="row">
				            <div class="col-md-10">
				                <div class="panel panel-default">
				                    <!--div class="panel-heading">Descripción del Producto <small class="text-danger">* Información Obligatoia</small></div-->
				                    <Label>Descripción del producto</Label>
				                    <div class="panel-body">
				                        <form>
				                        	<textarea class="ckeditor" name="description" id="editor1" rows="10" cols="80">
				                                {{ old('description', $producto->description) }}
				                            </textarea>
				                        </form>
				                    </div>
				                </div>
				            </div>
				        </div>
					</div>
				</div>
			</div>
		</div> {{-- Fin de Card de datos principales --}}
					
		<div class="card col-12 col-md-12"> {{-- INICIO de Card Foto banner --}}
			<div class="card-body">

				<div class="form-row">
					<div class="form-group col-md-12">
						<Label style='font-size: 30px;' class='mt-3 text-info'>Elige una imagen para el banner de la Descripción <span class="text-danger" style="font-size: 16px;">Tamaño de la imagen (1120px, 450px)</span></Label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
							</div>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="imagen">
								<label class="custom-file-label" for="inputGroupFile01">{{ $producto->image_banner }}</label>
							</div>
						</div>
					</div>


					{{-- 
					<div>
						<img src="{{ $producto->uri_image_banner.$producto->image_banner ? $producto->uri_image_banner.$producto->image_banner : 'https://picsum.photos/120/40' }}" alt="" width="520" height="auto">
					</div>
					 --}}
				</div>

			</div>
		</div> {{-- Fin de Card foto banner --}}


		<div class="card col-12 col-md-12"> {{-- INICIO de Card Subiir foto --}}
			<div class="card-body">

				<div class="form-row">
						<div class="form-group col-md-12">
							<Label style='font-size: 30px;' class='mt-3 text-info'>Subir fotos del producto <span class="text-danger" style="font-size: 16px;">Tamaño de la imagen (500px, 500px)</span></Label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
								</div>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="imagenes[]" multiple>
									<label class="custom-file-label" for="inputGroupFile01">Elige Imagen</label>
								</div>
							</div>
						</div>
					</div>

			</div>
		</div> {{-- Fin de Card subir fotos --}}

		<div class="card col-12 col-md-12"> {{-- INICIO de Card Foto banner --}}
			<div class="card-body">

				<div class="row row-cols-1 row-cols-md-4">
				  @foreach($producto->images as $img)
				  	<div class="col mb-4">
					    <div class="card">
							<div class="card-header">
								<h5 class="card-title font-weight-bold text-info">nmobre</h5>
							</div>
					      <div class="card-body">
					        <div><img src="{{ $img->uri_image }}{{ $img->image }}" alt="" width="200" height="auto"></div>
					      </div>

					      <div class="card-footer">
							<div class="d-flex align-items-center mt-2">
								<form method="POST" action="{{ route('imagesProduct.destroy', $img) }}">
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

			</div>
		</div> {{-- Fin de Card foto banner --}}

					


					

					

					<button type="submit" class="btn btn-primary mt-4">Publicar Producto</button>
			

	

	</div>
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

	<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>

    <script>

    	$(document).ready(function() {


    		//sistema de seleccionador de attributos
    		ids_array = [];
    		valores = $('#idAttr').val(); //guardamos el valor del input en una variable string
    		ids_array = valores.split(','); // convertimos el string del input a array
    		
    		$('.btn-attr').click(function(){

    			me = $(this)

    			if($(this).is(':checked')){
    				console.log('has chekeado' + $(this).attr('id'))
    				ids_array.push($(this).attr('id'))
    				$('#idAttr').val(ids_array);
    			}else{
    				//console.log('has quitado el check' + $(this).attr('id'))
					ids_array.forEach(function(attr, index, object) {
						if(attr === me.attr('id')){
							ids_array.splice(index, 1);
							$('#idAttr').val(ids_array);
						}
					});
    			}

    			$('.idAttr').val('hola');
    		})
		    
		    $('.custom-file-input').on('change', function(event) {
			    var inputFile = event.currentTarget;
			    $(inputFile).parent()
			        .find('.custom-file-label')
			        .html(inputFile.files[0].name);
			});


			$("#nameProduct").keyup(function () {
				var value = $(this).val();
				$("#title_producto").text(value);
			}).keyup();


		} );
		//pra los numeros con dos decimales
		$(document).on('keydown', 'input[pattern]', function(e){
		  var input = $(this);
		  var oldVal = input.val();
		  var regex = new RegExp(input.attr('pattern'), 'g');

		  setTimeout(function(){
		    var newVal = input.val();
		    if(!regex.test(newVal)){
		      input.val(oldVal); 
		    }
		  }, 0);
		});
    </script>
@stop