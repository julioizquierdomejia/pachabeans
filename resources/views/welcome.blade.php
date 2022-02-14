@extends('layouts.web')


@section('content')
<!-- SLIDER HEADER -->

  <x-slider />

<!-- FIN DEL SLIDER HEADER -->


<!-- INICIO DE LOS OBEJTIVOS los tag vienen aqui -->

  <x-objectives />

<!-- FIN DE LOS OBJETIVOSS -->

<!-- BANNERS PROMOCIONALES -->

<x--banners />

<!-- FIN DE BANNERS PROMOCIONALES -->

<!-- PRODUCTOS DEL MES -->

<div class="container mx-auto py-3">
  <div class="pm-header py-5">
    <h3 class="text-3xl text-center"><strong>Productos del Mes</strong></h3>
  </div>
  <ul class="products">

  @foreach($productos as $key)
    @if($key->outstanding == 0)
    <li class="py-3">
      <a class="block pt-3 pb-6 px-4 plink text-center hover:shadow-lg shadow-gray-300" href=" {{ route('web.show', $key->id) }} ">
        
        
        @if($key->offer > 0)
          <div class="percent absolute px-3 py-1 rounded-tl-sm rounded-br-sm rounded-tr-lg rounded-bl-lg text-white text-xs bg-rose-600">
            <strong>
            {{ round(($key->offer * 100) / $key->price), 2 }}%
            </strong>
          </div>
        @endif
        
        
        <div class="image h-30">
          <img class="mx-auto" src="assets/images/product/160599-500-auto.png" width="240">
        </div>
        <h4 class="py-3"><strong>{{ $key->name }}</strong></h4>
        
        {{-- Preguntamos si existe precio de oferta --}}
        <div class="price pb-3">
          @if($key->offer == 0)
              {{-- <strong class="old-price block text-gray-500"><span class="line-through">S/ {{ $key->offer }}</span></strong> --}}
              <strong class="actual-price block text-black">S/ {{ $key->price }}</strong>
          @else
            <strong class="old-price block text-gray-500"><span class="line-through">S/ {{ $key->price }}</span></strong>
            <strong class="actual-price block text-black">S/ {{ $key->offer }}</strong>
          @endif
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
    @endif
  @endforeach
    
  </ul>
</div>

<!-- FIN DE PRODUCTOS DEL MES -->


<!-- ESTILO DE VIDA -->
<x-estilo />
<!-- FIN DE ESTILOS DE VIDA -->


<!-- PRODUCTOS RECOMENDADOS -->
<div class="container mx-auto py-3">
  <div class="pm-header py-5">
    <h3 class="text-3xl text-center"><strong>Productos Recomendados</strong></h3>
  </div>
  <ul class="products">
    @foreach($productos as $key)
    @if($key->recommended == 0)
    <li class="py-3">
      <a class="block pt-3 pb-6 px-4 plink text-center hover:shadow-lg shadow-gray-300" href="">
        
        
        @if($key->offer > 0)
          <div class="percent absolute px-3 py-1 rounded-tl-sm rounded-br-sm rounded-tr-lg rounded-bl-lg text-white text-xs bg-rose-600">
            <strong>
            {{ round(($key->offer * 100) / $key->price), 2 }}%
            </strong>
          </div>
        @endif

        <div class="image h-30">
          @foreach($imagenes_productos as $img)
            @if($img->product_id == $key->id)
              <img class="mx-auto" src="{{ $img->uri_image }}{{ $img->image }}" width="240">
            @endif
          @endforeach
        </div>
        <h4 class="py-3"><strong>{{ $key->name }}</strong></h4>
        
        {{-- Preguntamos si existe precio de oferta --}}
        <div class="price pb-3">
          @if($key->offer == 0)
              {{-- <strong class="old-price block text-gray-500"><span class="line-through">S/ {{ $key->offer }}</span></strong> --}}
              <strong class="actual-price block text-black">S/ {{ $key->price }}</strong>
          @else
            <strong class="old-price block text-gray-500"><span class="line-through">S/ {{ $key->price }}</span></strong>
            <strong class="actual-price block text-black">S/ {{ $key->offer }}</strong>
          @endif
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
    @endif
  @endforeach
  </ul>
</div>
<!-- FIN DE PRODUCTOS RECOMENDADOS -->
@stop