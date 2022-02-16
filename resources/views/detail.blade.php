@extends('layouts.web')

@section('content')

<div class="container mx-auto pt-10 px-3">
	<div class="breadcrumbs mb-2">
		<ul class="flex flex-wrap items-center list-none text-gray-400 text-sm font-[700] mb-3">
			<li>Lab Nutrition</li>
			<li><i class="fa fa-circle text-xs mx-2 text-gray-600"></i> Control de peso</li>
			<li><i class="fa fa-circle text-xs mx-2 text-gray-600"></i> Quemadores de Grasa</li>
		</ul>
		<div class="border-2 border-rose-600 w-10"></div>
	</div>
	<h4 class="product-name text-lg mb-1"><strong class="font-[700]">{{ $producto->name }}</strong></h4>
	<p class="text-gray-500 text-md mb-3"><strong class="font-[700]">MUSCLETECH</strong></p>
	<div class="p-tabs relative">
		<div class="flex flex-wrap gap-4 font-[600] z-10 relative">
			<div class="tab-item w-full sm:w-auto"><a class="block py-1 border-b-2 border-transparent transition duration-300 hover:border-yellow-500" href="#descripcion">Descripción</a></div>
			<div class="tab-item w-full sm:w-auto"><a class="block py-1 border-b-2 border-transparent transition duration-300 hover:border-yellow-500" href="#modo-empleo">Modo de empleo</a></div>
			<div class="tab-item w-full sm:w-auto"><a class="block py-1 border-b-2 border-transparent transition duration-300 hover:border-yellow-500" href="#completa-objetivo">Completa tu objetivo</a></div>
		</div>
		<div class="border-b border-gray-400 absolute left-0 right-0 bottom-0 h-0"></div>
	</div>

	<div class="flex details gap-4">
		<div class="pd-item w-full md:w-1/3 py-5">
			<div class="max-w-1/2">
				<h5 class="text-sm mb-3"><strong class="font-[800]">ES IDEAL PARA:</strong></h5>
				<div class="flex text-xs font-[600] text-justify md:pr-12 mb-3">
					<i class="fa fa-circle text-xs text-rose-500 pr-2"></i>
					<p>200mg de Cafeína anhidra por servicio (2 cápsulas) Carnitina tartrato para una mejor movilización de grasas Termogénico lipolítico (disminuye tejido graso) Taurina para mejorar el enfoque y concentración</p>
				</div>
				<h5 class="text-sm mb-3"><strong class="font-[800]">SI TU OBJETIVO ES:</strong></h5>
				<div class="flex gap-4 items-center md:pr-12">
					<div class="obj-mask -skew-x-12 bg-rose-100 w-12 h-12 text-center flex items-center after:w-2 after:bg-rose-100 after:h-full after:d-block after:absolute after:-right-4 top-0 bottom-0 mr-4">
						<div class="skew-x-12 mx-auto">
							<img class="-ml-1" src="{{ asset('assets/images/Imagen.png') }}">
						</div>
					</div>
					<p class="text-gray-600 leading-[16px] font-[600] text-[14px]">PIERDE PESO Y TONIFICA</p>
				</div>
			</div>
		</div>

		<div class="pd-item w-full md:w-1/3 md:pr-2">
			<div class="pr-image relative">
				<div class="pr-left absolute left-5 top-5 z-10 text-center bg-white bg-opacity-95 py-5">
					<div class="pr-item mb-2">
						<div class="pr-icon relative">
							<img class="mx-auto" src="{{ asset('assets/images/composition.png') }}" width="70">
							<span class="absolute top-1/2 -translate-y-1/2 left-0 right-0 font-[700] text-[12px]">200mg</span>
						</div>
						<p class="text-[12px] font-[700]">CAFEÍNA</p>
					</div>
					<div class="pr-item mb-2">
						<div class="pr-icon relative">
							<img class="mx-auto" src="{{ asset('assets/images/composition.png') }}" width="70">
							<span class="absolute top-1/2 -translate-y-1/2 left-0 right-0 font-[700] text-[12px]">200mg</span>
						</div>
						<p class="text-[12px] font-[700]">TAURINA</p>
					</div>
					<div class="pr-item mb-2">
						<div class="pr-icon relative">
							<img class="mx-auto" src="{{ asset('assets/images/composition.png') }}" width="70">
							<span class="absolute top-1/2 -translate-y-1/2 left-0 right-0 font-[700] text-[12px]">200mg</span>
						</div>
						<p class="text-[12px] font-[700]">L-CARNITINA</p>
					</div>
				</div>
				<div class="pr-right">
					<div class="xzoom-container">
			          <img class="xzoom shadow-none" id="xzoom-default" src="{{ $imagen->uri_image }}{{ $imagen->image }}" xoriginal="{{ $imagen->uri_image }}{{ $imagen->image }}" />
			          <div class="xzoom-thumbs">
			            <a href="assets/images/157458-1600-auto.jpg"><img class="xzoom-gallery inline-block" width="80" src=" {{ asset('assets/images/157458-1600-auto.jpg') }}"  xpreview="images/gallery/preview/01_b_car.jpg" title="Desc"></a>
			            <a href="assets/images/157458-1600-auto.jpg"><img class="xzoom-gallery inline-block" width="80" src=" {{ asset('assets/images/157458-1600-auto.jpg') }}" title="Desc"></a>
			            <a href="assets/images/157458-1600-auto.jpg"><img class="xzoom-gallery inline-block" width="80" src=" {{ asset('assets/images/157458-1600-auto.jpg') }}" title="Desc"></a>
			            <a href="assets/images/157458-1600-auto.jpg"><img class="xzoom-gallery inline-block" width="80" src=" {{ asset('assets/images/157458-1600-auto.jpg') }}" title="Desc"></a>
			          </div>
			        </div>
				</div>
			</div>
		</div>

		<div class="pd-item w-full md:w-1/4 md:pr-12 py-5">
			<div class="pr-bottom">
				<div class="price pb-3 text-xl">
					<strong class="actual-price block text-rose-600">S/ 349.00</strong>
					<span class="old-price block"><span class="line-through">S/ 409.00</span></span>
				</div>
				<div class="details">
					<p class="text-[13px]"><strong>ELIGE UN SABOR:</strong></p>
					<p class="mb-4">
						<img class="rounded" src="{{ asset('assets/images/product/TEXTURA_FRESA.png') }}" width="25">
					</p>
					<p class="text-[13px]"><strong>ESCOGE EL TAMAÑO</strong></p>
					<p class="pt-2 mb-4">
						<span class="inline-block border border-gray-700 px-3">5 lb</span>
					</p>
					<p class="text-[13px]"><strong>¿CUÁNTOS QUIERES?</strong></p>
					<div class="qty-container flex w-28 pt-2">
						<button class="btn relative bg-gray-500 px-2 btn-down before:bg-gray-500 before:absolute before:left-5 before:top-0 before:-right-1 before:bottom-0 before:-skew-x-12"><i class="fal fa-minus text-white text-sm"></i></button>
						<input class="placeholder:text-slate-400 block bg-white w-full border border-gray-500 rounded py-2 px-3 text-center shadow-sm focus:outline-none sm:text-sm" placeholder="1" type="text" name="qty" />
						<button class="btn relative bg-gray-500 px-2 btn-up before:bg-gray-500 before:absolute before:-left-[5px] before:top-0 before:right-5 before:bottom-0 before:skew-x-12 relative"><i class="fal fa-plus text-white text-sm"></i></button>
					</div>
					<div class="pr-buttons flex pt-7">
						<span class="hover:bg-rose-500 inline-block border border-rose-600 -skew-x-12 px-3 py-1 text-rose-500 hover:text-white" href="/wish"><span class="inline-block skew-x-12"><i class="fa fa-heart"></i></span></span>
						<button class="btn bg-rose-600 text-white ml-2 -skew-x-12 border border-rose-600 px-10 py-1"><strong class="inline-block skew-x-12 text-sm">AGREGAR</strong></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="share text-center py-4">
		<span class="text-gray-500 pr-3 text-xs">Comparte:</span>
		<ul class="list-none inline-flex gap-4 text-xl">
			<li><a class="hover:text-rose-600" href=""><i class="fab fa-whatsapp"></i></a></li>
			<li><a class="hover:text-rose-600" href=""><i class="fab fa-facebook"></i></a></li>
			<li><a class="hover:text-rose-600" href=""><i class="fab fa-twitter"></i></a></li>
		</ul>
	</div>
</div>


{{-- DESCRIPCION DLE PRODUCTO  --}}

<div class="container mx-auto pt-10 px-3">
	<div class="pb-description mb-5" id="descripcion">
		<h4 class="text-lg mb-4"><strong class="font-[900]">DESCRIPCIÓN</strong></h4>
		<div class="flex flex-wrap -mx-4">
			<div class="pbd-left w-full md:w-3/4 px-2">
				<div class="pbd-banner">
					<img src="{{ $producto->uri_image_banner }}{{ $producto->image_banner }}">
					
				</div>
				<div class="shadow-lg bg-white px-5 md:px-8 py-10 md:py-12 max-w-[80%] mx-auto md:-mt-12 z-10 relative">

					{{!!$producto->description!!}
					
					{{-- 
					<h4 class="text-2xl mb-4"><strong>Optimiza la pérdida de grasa</strong></h4>
					<div class="text-lime-700 mb-6 font-[700]">Diseñado para ser la herramienta más eficaz en la reducción de grasa corporal-.</div>
					<div class="pbd-text">
						HYDROXYCUT, la línea de termogénicos de MUSCLETECH, nos trae una nueva versión, esta vez no solo con el principal lipolítico cafeína anhidra, sino además, con Carnitina, en forma de Carnitina tartrato, una Carnitina de mayor acción. Se le suman además nuevos ingredientes como la Taurina como un neurotransmisor que ayudará al enfoque, y por último Vitamina B3 que ayudará en el metabolismo de las grasas. De esa manera este nuevo HYDROXYCUT será la solución a esa disminución de grasa tan complicada de bajar por parte de nuestros clientes más exigentes y que se encuentran en etapa de definición muscular
					</div>
					 --}}
				</div>
			</div>
			<div class="pbd-right w-full md:w-1/4 px-2 mt-3 md:mt-0">
				<div class="pbd-glossary bg-gray-200 px-5 py-4">
					<h5 class="text-xl font-[600] mb-3"><i class="fas fa-file-edit text-orange-300 mr-2"></i>GLOSARIO</h5>
					<p class="text-sm text-gray-600"><strong>*Termogénico:</strong> sustancia capaz de aumentar la temperatura corporal para producir reacciones metabólicas.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="pbd-mu mb-10" id="modo-empleo">
		<h4 class="text-lg mb-4"><strong class="font-[900]">MODO DE EMPLEO</strong></h4>
		<div class="flex flex-wrap text-gray-800 border border-slate-200">
			<div class="pbd-mu-left w-full md:w-1/2 p-4 flex items-center">
				<i class="fas fa-glass pr-3 text-green-600 text-3xl"></i>
				<p>*Si es primer uso / test de tolerancia: 1 cápsula media hora antes de realizar actividad física*Protocolo de uso ideal: 2 cápsulas media hora antes de realizar actividad física.*No exceder de 4 capsulas en 24 horas</p>
			</div>
			<div class="pbd-mu-right w-full md:w-1/2 p-4 bg-slate-200">
				<h5 class="font-[700] mb-2">RECOMENDACIONES</h5>
				<p>*Se recomienda una adecuada ingesta de agua durante la actividad física, para evitar la deshidratación y molestias musculares.*No se recomienda tomar con el estómago vacío, a menos que ya se haya probado y no presente molestias.</p>
			</div>
		</div>
	</div>

	<!-- producto_completa_objetivo.html -->

	<div class="comments mb-4" id="comentarios">
		<h4 class="text-lg mb-4 border-b border-gray-200"><strong class="font-[900]">COMENTARIOS</strong></h4>
		<div class="stars flex text-red-500 mb-3">
			<i class="far fa-star"></i>
			<i class="far fa-star"></i>
			<i class="far fa-star"></i>
			<i class="far fa-star"></i>
			<i class="far fa-star"></i>
		</div>
		<p class="mb-4"><strong>0 Calificación promedio (0 comentarios)</strong></p>
		<a class="text-red-500 inline-block border-b border-red-500 leading-4" href="">Por favor, inicie sesión para escribir un comentario</a>
		<div class="filters flex mt-5 mb-4">
			<select class="border border-gray-500 px-3 py-1 leading-4">
				<option disabled value="">Ordenar por:</option>
				<option value="">Más recientes</option>
				<option value="">Más recientes</option>
				<option value="">Más recientes</option>
			</select>
			<select class="border border-gray-500 px-3 py-1 leading-4">
				<option disabled value="">Filtrar por:</option>
				<option value="">1 estrella</option>
				<option value="">2 estrellas</option>
				<option value="">3 estrellas</option>
				<option value="">4 estrellas</option>
				<option value="">5 estrellas</option>
			</select>
		</div>
		<div class="comments-list mb-3">
			<p class="text-xl text-gray-800">Sin comentarios.</p>
		</div>
		<div class="border-b-4 border-gray-200"></div>
	</div>
</div>


{{-- COMPLETA TU OBJETIVO --}}

<div class="container mx-auto py-3" id="completa-objetivo">
	<div class="pm-header py-5">
		<h4 class="text-lg mb-4"><strong class="font-[900]">COMPLETA TU OBJETIVO</strong></h4>
	</div>
	<ul class="products">
		<li class="py-3">
			<a class="block pt-3 pb-6 px-4 plink text-center hover:shadow-lg shadow-gray-300" href="">
				<div class="percent absolute px-3 py-1 rounded-tl-sm rounded-br-sm rounded-tr-lg rounded-bl-lg text-white text-xs bg-rose-600">
					<strong>19%</strong>
				</div>
				<div class="image h-30">
					<img class="mx-auto" src="assets/images/product/160599-500-auto.png" width="240">
				</div>
				<h4 class="py-3"><strong>NITRO TECH 100% WHEY GOLD</strong></h4>
				<div class="price pb-3">
					<strong class="old-price block text-gray-500"><span class="line-through">S/ 409.00</span></strong>
					<strong class="actual-price block text-black">S/ 349.00</strong>
				</div>
				<p class="text-gray-400 text-sm"><strong>1 Sabor +</strong></p>
				<div class="pr-bottom">
					<div class="details">
						<p class="text-xs"><strong>ELIGE UN SABOR:</strong></p>
						<p class="mb-3">
							<img class="rounded mx-auto" src="assets/images/product/TEXTURA_FRESA.png" width="25">
						</p>
						<p class="text-xs"><strong>ESCOGE EL TAMAÑO</strong></p>
						<p class="pt-2">
							<span class="inline-block border border-gray-700 px-3">5 lb</span>
						</p>
					</div>
					<div class="pr-buttons flex justify-center pt-3">
						<button class="btn text-rose-600 -skew-x-12 border border-rose-600 hover:bg-rose-600 hover:text-white px-4 py-1"><span class="inline-block skew-x-12">AGREGAR</span></button>
						<span class="bg-red-100 inline-block -skew-x-12 px-3 py-1 ml-2 text-gray-500 hover:text-rose-600" href="/wish"><span class="inline-block skew-x-12"><i class="fa fa-heart"></i></span></span>
					</div>
				</div>
			</a>
		</li>
		<li class="py-3">
			<a class="block pt-3 pb-6 px-4 plink text-center hover:shadow-lg shadow-gray-300" href="">
				<div class="image h-30">
					<img class="mx-auto" src="assets/images/product/160599-500-auto.png" width="240">
				</div>
				<h4 class="py-3"><strong>NITRO TECH 100% WHEY GOLD</strong></h4>
				<div class="price pb-3">
					<strong class="old-price block text-gray-500"><span class="line-through">S/ 409.00</span></strong>
					<strong class="actual-price block text-black">S/ 349.00</strong>
				</div>
				<p class="text-gray-400 text-sm"><strong>1 Sabor +</strong></p>
				<div class="pr-bottom">
					<div class="details">
						<p class="text-xs"><strong>ELIGE UN SABOR:</strong></p>
						<p class="mb-3">
							<img class="rounded mx-auto" src="assets/images/product/TEXTURA_FRESA.png" width="25">
						</p>
						<p class="text-xs"><strong>ESCOGE EL TAMAÑO</strong></p>
						<p class="pt-2">
							<span class="inline-block border border-gray-700 px-3">5 lb</span>
						</p>
					</div>
					<div class="pr-buttons flex justify-center pt-3">
						<button class="btn text-rose-600 -skew-x-12 border border-rose-600 hover:bg-rose-600 hover:text-white px-4 py-1"><span class="inline-block skew-x-12">AGREGAR</span></button>
						<span class="bg-red-100 inline-block -skew-x-12 px-3 py-1 ml-2 text-gray-500 hover:text-rose-600" href="/wish"><span class="inline-block skew-x-12"><i class="fa fa-heart"></i></span></span>
					</div>
				</div>
			</a>
		</li>
		<li class="py-3">
			<a class="block pt-3 pb-6 px-4 plink text-center hover:shadow-lg shadow-gray-300" href="">
				<div class="image h-30">
					<img class="mx-auto" src="assets/images/product/160599-500-auto.png" width="240">
				</div>
				<h4 class="py-3"><strong>NITRO TECH 100% WHEY GOLD</strong></h4>
				<div class="price pb-3">
					<strong class="old-price block text-gray-500"><span class="line-through">S/ 409.00</span></strong>
					<strong class="actual-price block text-black">S/ 349.00</strong>
				</div>
				<p class="text-gray-400 text-sm"><strong>1 Sabor +</strong></p>
				<div class="pr-bottom">
					<div class="details">
						<p class="text-xs"><strong>ELIGE UN SABOR:</strong></p>
						<p class="mb-3">
							<img class="rounded mx-auto" src="assets/images/product/TEXTURA_FRESA.png" width="25">
						</p>
						<p class="text-xs"><strong>ESCOGE EL TAMAÑO</strong></p>
						<p class="pt-2">
							<span class="inline-block border border-gray-700 px-3">5 lb</span>
						</p>
					</div>
					<div class="pr-buttons flex justify-center pt-3">
						<button class="btn text-rose-600 -skew-x-12 border border-rose-600 hover:bg-rose-600 hover:text-white px-4 py-1"><span class="inline-block skew-x-12">AGREGAR</span></button>
						<span class="bg-red-100 inline-block -skew-x-12 px-3 py-1 ml-2 text-gray-500 hover:text-rose-600" href="/wish"><span class="inline-block skew-x-12"><i class="fa fa-heart"></i></span></span>
					</div>
				</div>
			</a>
		</li>
		<li class="py-3">
			<a class="block pt-3 pb-6 px-4 plink text-center hover:shadow-lg shadow-gray-300" href="">
				<div class="image h-30">
					<img class="mx-auto" src="assets/images/product/160599-500-auto.png" width="240">
				</div>
				<h4 class="py-3"><strong>NITRO TECH 100% WHEY GOLD</strong></h4>
				<div class="price pb-3">
					<strong class="old-price block text-gray-500"><span class="line-through">S/ 409.00</span></strong>
					<strong class="actual-price block text-black">S/ 349.00</strong>
				</div>
				<p class="text-gray-400 text-sm"><strong>1 Sabor +</strong></p>
				<div class="pr-bottom">
					<div class="details">
						<p class="text-xs"><strong>ELIGE UN SABOR:</strong></p>
						<p class="mb-3">
							<img class="rounded mx-auto" src="assets/images/product/TEXTURA_FRESA.png" width="25">
						</p>
						<p class="text-xs"><strong>ESCOGE EL TAMAÑO</strong></p>
						<p class="pt-2">
							<span class="inline-block border border-gray-700 px-3">5 lb</span>
						</p>
					</div>
					<div class="pr-buttons flex justify-center pt-3">
						<button class="btn text-rose-600 -skew-x-12 border border-rose-600 hover:bg-rose-600 hover:text-white px-4 py-1"><span class="inline-block skew-x-12">AGREGAR</span></button>
						<span class="bg-red-100 inline-block -skew-x-12 px-3 py-1 ml-2 text-gray-500 hover:text-rose-600" href="/wish"><span class="inline-block skew-x-12"><i class="fa fa-heart"></i></span></span>
					</div>
				</div>
			</a>
		</li>
		<li class="py-3">
			<a class="block pt-3 pb-6 px-4 plink text-center hover:shadow-lg shadow-gray-300" href="">
				<div class="image h-30">
					<img class="mx-auto" src="assets/images/product/160599-500-auto.png" width="240">
				</div>
				<h4 class="py-3"><strong>NITRO TECH 100% WHEY GOLD</strong></h4>
				<div class="price pb-3">
					<strong class="old-price block text-gray-500"><span class="line-through">S/ 409.00</span></strong>
					<strong class="actual-price block text-black">S/ 349.00</strong>
				</div>
				<p class="text-gray-400 text-sm"><strong>1 Sabor +</strong></p>
				<div class="pr-bottom">
					<div class="details">
						<p class="text-xs"><strong>ELIGE UN SABOR:</strong></p>
						<p class="mb-3">
							<img class="rounded mx-auto" src="assets/images/product/TEXTURA_FRESA.png" width="25">
						</p>
						<p class="text-xs"><strong>ESCOGE EL TAMAÑO</strong></p>
						<p class="pt-2">
							<span class="inline-block border border-gray-700 px-3">5 lb</span>
						</p>
					</div>
					<div class="pr-buttons flex justify-center pt-3">
						<button class="btn text-rose-600 -skew-x-12 border border-rose-600 hover:bg-rose-600 hover:text-white px-4 py-1"><span class="inline-block skew-x-12">AGREGAR</span></button>
						<span class="bg-red-100 inline-block -skew-x-12 px-3 py-1 ml-2 text-gray-500 hover:text-rose-600" href="/wish"><span class="inline-block skew-x-12"><i class="fa fa-heart"></i></span></span>
					</div>
				</div>
			</a>
		</li>
		<li class="py-3">
			<a class="block pt-3 pb-6 px-4 plink text-center hover:shadow-lg shadow-gray-300" href="">
				<div class="image h-30">
					<img class="mx-auto" src="assets/images/product/160599-500-auto.png" width="240">
				</div>
				<h4 class="py-3"><strong>NITRO TECH 100% WHEY GOLD</strong></h4>
				<div class="price pb-3">
					<strong class="old-price block text-gray-600">S/ 409.00</strong>
					<strong class="actual-price block text-black">S/ 349.00</strong>
				</div>
				<p class="text-gray-400 text-sm"><strong>1 Sabor +</strong></p>
				<div class="pr-bottom">
					<div class="details">
						<p class="text-xs"><strong>ELIGE UN SABOR:</strong></p>
						<p class="mb-3">
							<img class="rounded mx-auto" src="assets/images/product/TEXTURA_FRESA.png" width="25">
						</p>
						<p class="text-xs"><strong>ESCOGE EL TAMAÑO</strong></p>
						<p class="pt-2">
							<span class="inline-block border border-gray-700 px-3">5 lb</span>
						</p>
					</div>
					<div class="pr-buttons flex justify-center pt-3">
						<button class="btn text-rose-600 -skew-x-12 border border-rose-600 hover:bg-rose-600 hover:text-white px-4 py-1"><span class="inline-block skew-x-12">AGREGAR</span></button>
						<span class="bg-red-100 inline-block -skew-x-12 px-3 py-1 ml-2 text-gray-500 hover:text-rose-600" href="/wish"><span class="inline-block skew-x-12"><i class="fa fa-heart"></i></span></span>
					</div>
				</div>
			</a>
		</li>
	</ul>
</div>

@stop