@extends('layouts.web')


{{-- @section('content') --}}
<!-- SLIDER HEADER -->
  {{-- <x-slider /> --}}

<!-- FIN DEL SLIDER HEADER -->


<!-- INICIO DE LOS OBEJTIVOS los tag vienen aqui -->
{{-- <x-objectives /> --}}

<!-- FIN DE LOS OBJETIVOSS -->

<!-- BANNERS PROMOCIONALES -->
{{-- <x-banners /> --}}

<!-- FIN DE BANNERS PROMOCIONALES -->



<!-- ESTILO DE VIDA -->
{{-- <x-estilo /> --}}

<!-- FIN DE ESTILOS DE VIDA -->


@section('content')

<!-- Container Slider Productos-->
  <div class="container mx-auto px-10">
    
    <!-- Slider Productos -->
    <div class="slider_productos mx-auto">

      <!-- Producto -->
      <div class='cardProducto py-5 pr-10'>
        <div class="border border-2 border-gray-300 rounded-lg relative overflow-hidden">         
          <span class="bg-red-600 rounded text-white px-4 text-xl absolute top-3 left-3 font-semibold">Nuevo</span>
          <span class="text-red-400 hover:text-red-600 px-4 text-xl absolute top-3 right-3 font-semibold cursor-pointer"><i class="far fa-shopping-cart"></i></span>
          <span class="text-red-400 hover:text-red-600 px-4 text-xl absolute top-3 right-12 font-semibold cursor-pointer"><i class="far fa-heart"></i></span>
          <img class='w-full' src="img/productos/producto1.png" alt="">
          <h5 class="text-2xl ml-3 mt-3 text-gray-400">Cafe Junin</h5>
          <h4 class="text-3xl ml-3 text-gray-700 font-medium">Tostado Medio</h4>
          <div class="valoracion text-amber-300 ml-3 mt-3">
            <i class="fas fa-star cursor-pointer"></i>
            <i class="fas fa-star cursor-pointer"></i>
            <i class="far fa-star cursor-pointer"></i>
            <i class="far fa-star cursor-pointer"></i>
            <i class="far fa-star cursor-pointer"></i>
          </div>
          <div class="price flex items-center my-4">
            <span class="text-2xl ml-3 text-gray-500 font-semibold">S/. 72.00</span>
            <span class="text-2xl ml-3 text-red-500 font-semibold">S/. 60.00</span>
            <span class="bg-red-600 ml-3 rounded text-white px-4 text-xl font-semibold">-12 %</span>  
          </div>
        </div>
      </div>
      <!-- Fin Producto -->
    </div>
    <!-- fin Slider Productos -->

  </div>
  <!-- Fin Container Slider Productos-->

  
@stop
