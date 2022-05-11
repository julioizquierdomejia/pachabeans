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
    
    @if($categorias)
      @foreach($categorias as $categoria)
        
        @if($subcategorias)
          @foreach($subcategorias as $subCategoria)

            {{-- Si la categoría existe, pero no tiene productos no la mostramos --}}
            @if($subCategoria->products->count() > 0)
              @if($subCategoria->category_id == $categoria->id)
              <h3 class="text-5xl text-lime-600 font-bold pt-6">{{ $categoria->name }}</h3>
                <h3 class="text-3xl text-slate-500 pb-4">{{ $subCategoria->name }} ({{ $subCategoria->products->count() }} Productos) </h3>

                <!-- Slider Productos -->
                <div class="slider_productos mx-auto">

                  @foreach($subCategoria->products as $producto)
                  <!-- Producto -->
                  <div class='cardProducto py-5 pr-10'>
                    <div class="border border-2 border-gray-300 rounded-lg relative overflow-hidden">         
                      @if($producto->recommended == 1)
                        <span class="bg-red-600 rounded text-white px-4 text-xl absolute top-3 left-3 font-semibold">Recomendado</span>
                      @endif
                      
                      <span class="text-red-400 hover:text-red-600 px-4 text-xl absolute top-3 right-3 font-semibold cursor-pointer"><i class="far fa-shopping-cart"></i></span>
                      <span class="text-red-400 hover:text-red-600 px-4 text-xl absolute top-3 right-12 font-semibold cursor-pointer"><i class="far fa-heart"></i></span>
                      <!--img class='w-full' src="img/productos/producto1.png" alt=""-->
                      <img class='w-full' src="{{ $producto->uri_image_banner.$producto->image_banner }}" alt="">
                      <h5 class="text-2xl ml-3 mt-3 text-gray-400">{{ $subCategoria->name }}</h5>
                      <h4 class="text-3xl ml-3 text-gray-700 font-medium">{{ $producto->name }}</h4>

                      <div class="atributos mt-3">
                        @foreach($producto->values as $value)
                          @foreach($atributos as $atributo)
                            @if($atributo->id == $value->attribute_id)
                              <h4 class="text-xl ml-3 text-gray-400 font-medium"><span class="text-gray-600">{{ $atributo->name }} :</span> {{ $value->name }}</h4>    
                            @endif
                          @endforeach
                        @endforeach  
                      </div>
                      
                      
                      <div class="valoracion text-amber-300 ml-3 mt-3">
                        <i class="fas fa-star cursor-pointer"></i>
                        <i class="fas fa-star cursor-pointer"></i>
                        <i class="far fa-star cursor-pointer"></i>
                        <i class="far fa-star cursor-pointer"></i>
                        <i class="far fa-star cursor-pointer"></i>
                      </div>
                      <div class="price flex items-center my-4">
                        <span class="text-2xl ml-3 text-gray-500 font-semibold">S/. {{ $producto->price }}</span>
                        <span class="text-2xl ml-3 text-red-500 font-semibold">S/. {{ $producto->offer }}</span>
                        <span class="bg-red-600 ml-3 rounded text-white px-4 text-xl font-semibold">-12 %</span>  
                      </div>
                    </div>
                  </div>
                  <!-- Fin Producto -->
                @endforeach

                </div>
                <!-- fin Slider Productos -->
                

              @endif
            @else
            @endif
          @endforeach
        @else
          <span>Non hay Sub Categorias para mostrar</span>
        @endif
      @endforeach
    @else
      <span>Non hay Categorias que mostrar</span>
    @endif

    

  </div>
  <!-- Fin Container Slider Productos-->

  
@stop
