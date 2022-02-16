<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Venathor - Header</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/fontawesome-pro-5.10.0/css/all.min.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>

  <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos_venathor.css') }}"/>
  


  <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>

  
</head>
<body style="font-family: Nunito Sans, sans-serif;" class="ff-nunito">

<!--x-header titulo="Titulo de Componente" /-->

<!-- ************************************* -->
<!-- INICIO DEL COMPONENTE HEADER ---->
<!-- ************************************* -->

<div class="header z-20 relative">
  <div class="bg-gray-400">
  <div class="container mx-auto text-white text-sm">
  <div class="flex">
    <div class="flex w-1/2">
      <a href="/" class="py-1 px-2 inline-block hover:bg-orange-500"></a>
      <a href="/" class="py-1 px-2 inline-block hover:bg-orange-500 bg-green-600">Mis Pedidos</a>
      <a href="/" class="py-1 px-2 inline-block hover:bg-orange-500">Promociones</a>
      <a href="/" class="py-1 px-2 inline-block hover:bg-orange-500">Tiendas</a>
    </div>
    <div class="flex w-1/2">
      <div class="ml-auto">
        <a href="tel:936105037" class="py-1 inline-block hover:underline">Whatsapp: +51 936105037</a>
        <span class="px-1">/</span>
        <a href="tel:6429997" class="py-1 inline-block hover:underline">FonoCompras: +51 6429997</a>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div class="bg-white">
  <div class="container mx-auto">
    <div class="flex relative">
      <div class="logo py-1">
        <img src="{{ asset('assets/images/logo.svg') }}" width="160" alt="VN">
      </div>
      <div class="menu-container px-2">
        <button class="btn flex py-4 px-3 text-left text-sm text-gray-500 items-center" data-target="#dropdownMenu" data-toggle="dropdown" data-overlay="true" id="btnMenu">
          <span class="icon pr-3">
            <svg viewBox="0 0 100 80" width="32" height="32" fill="red">
              <rect class="ease-in duration-100 i-first" y="10" width="100" height="8" rx="7"></rect>
              <rect class="ease-in duration-100 i-second" y="36" width="100" height="8" rx="7"></rect>
              <rect class="ease-in duration-100 i-third" y="60" x="30" width="70" height="8" rx="7"></rect>
            </svg>
          </span>
          <span class="icon-text leading-4">Nuestas <br>Categorias</span>
          <span class="icon-right block pl-2">
            <i class="far fa-angle-down ease-in duration-200 text-xl text-red-500"></i>
          </span>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownMenu" class="dropdown-menu-c left-0 absolute hidden z-10 w-80 text-base list-none bg-white shadow">
            <ul class="pt-0" aria-labelledby="dropdownMenuButton">
              
              @foreach($categorias as $cat)
                <li class="dm-item" data-target="#dm1">
                  @if($cat->outstanding == 0)
                    <span class="block relative py-2 px-4 text-sm text-white bg-lime-600 hover:bg-rose-600 hover:text-white">{{ $cat->name }}<i class="far fa-angle-right absolute top-0 mt-1 right-5 text-white text-lg"></i></span>
                  @elseif($cat->recommended == 0)
                    <span class="block relative py-2 px-4 text-sm text-white bg-orange-400 hover:bg-rose-600 hover:text-white">{{ $cat->name }}<i class="far fa-angle-right absolute top-0 mt-1 right-5 text-white text-lg"></i></span>
                  @else
                    <span class="block relative py-2 px-4 text-sm text-gray-700 hover:bg-rose-600 hover:text-white">{{ $cat->name }} <i class="far fa-angle-right absolute top-0 mt-1 right-5 text-white text-lg"></i></span>
                  @endif

                  
                  <div class="dropdown-menu absolute left-full top-0 bg-white w-96 px-7 py-8" id="dm1" style="width: 500px;">
                    <div class="smenu-header mb-3 md:mb-8">
                      <a class="block text-md text-gray-500 border-b border-gray-400" href="/organicos-y-naturales"><i class="far fa-leaf mr-3 text-orange-500"></i><strong>{{ strtoupper($cat->name) }}</strong></a>
                    </div>
                    <div class="smenu-content grid grid-cols-2 gap-4">
                      <ul class="catContent text-sm">

                        @foreach($subcategorias as $sc)
                          <li class="smenu-catItem font-medium">
                            @if($sc->category_id == $cat->id)
                              <a href="/construccion-muscular/proteinas" class="smenu-cl block text-gray-500 py-1">{{ $sc->name }}</a>
                            @endif
                          </li>


                        @endforeach
                        {{-- 
                        <li class="smenu-catItem font-medium">
                          <a href="/construccion-muscular/proteinas" class="smenu-cl block text-gray-500 py-1">Proteinas</a>
                        </li>
                        <li class="smenu-catItem">
                          <a href="/construccion-muscular/aminoacidos" class="smenu-cl block text-gray-500 py-1">Aminoácidos</a>
                        </li>
                        <li class="smenu-catItem">
                          <a href="/171?map=productClusterIds" class="smenu-cl block text-gray-500 py-1">Vitaminas</a>
                        </li>
                         --}}
                      </ul>
                      <div class="photo relative">
                        <img src="assets/images/ORGANICO-27052020.png" width="270">
                        <a class="absolute text-xs px-2 py-1 leading-3 right-5 bottom-5 bg-white text-gray-700 hover:bg-rose-600 hover:text-white" href="/"><strong>VER TODO</strong></a>
                      </div>
                    </div>
                  </div>
                </li>
              @endforeach



              {{-- 
              <li class="dm-item" data-target="#dm2">
                <span class="block relative py-2 px-4 text-sm text-gray-700 hover:bg-rose-600 hover:text-white">Proteínas y Aminoácidos <i class="far fa-angle-right absolute top-0 mt-1 right-5 text-white text-lg"></i></span>
                <div class="dropdown-menu absolute left-full top-0 bg-white w-96 px-7 py-8" id="dm2" style="width: 500px;">
                  <div class="smenu-header mb-3 md:mb-8">
                    <a class="block text-md text-gray-500 border-b border-gray-400" href="/organicos-y-naturales"><i class="far fa-leaf mr-3 text-orange-500"></i><strong>PROTEÍNAS Y AMINOÁCIDOS</strong></a>
                  </div>
                  <div class="smenu-content grid grid-cols-2 gap-4">
                    <ul class="catContent text-sm">
                      <li class="smenu-catItem font-medium">
                        <a href="/construccion-muscular/proteinas" class="smenu-cl block text-gray-500 py-1">Proteinas</a>
                      </li>
                      <li class="smenu-catItem">
                        <a href="/construccion-muscular/aminoacidos" class="smenu-cl block text-gray-500 py-1">Aminoácidos</a>
                      </li>
                      <li class="smenu-catItem">
                        <a href="/171?map=productClusterIds" class="smenu-cl block text-gray-500 py-1">Vitaminas</a>
                      </li>
                    </ul>
                    <div class="photo relative">
                      <img src="assets/images/ORGANICO-27052020.png" width="270">
                      <a class="absolute text-xs px-2 py-1 leading-3 right-5 bottom-5 bg-white text-gray-700 hover:bg-rose-600 hover:text-white" href="/"><strong>VER TODO</strong></a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="dm-item" data-target="#dm3">
                <span class="block relative py-2 px-4 text-sm text-gray-700 hover:bg-rose-600 hover:text-white">Control de Peso <i class="far fa-angle-right absolute top-0 mt-1 right-5 text-white text-lg"></i></span>
              </li>
              <li class="dm-item" data-target="#dm4">
                <span class="block relative py-2 px-4 text-sm text-gray-700 hover:bg-rose-600 hover:text-white">Energía <i class="far fa-angle-right absolute top-0 mt-1 right-5 text-white text-lg"></i></span>
              </li>
              <li class="dm-item" data-target="#dm5">
                <span class="block relative py-2 px-4 text-sm text-gray-700 hover:bg-rose-600 hover:text-white">Salud Y Bienestar <i class="far fa-angle-right absolute top-0 mt-1 right-5 text-white text-lg"></i></span>
              </li>
              <li class="dm-item" data-target="#dm6">
                <span class="block relative py-2 px-4 text-sm text-white bg-orange-400 hover:bg-rose-600 hover:text-white">Zona Solgar <i class="far fa-angle-right absolute top-0 mt-1 right-5 text-white text-lg"></i></span>
              </li>
              <li class="dm-item" data-target="#dm7">
                <span class="block relative py-2 px-4 text-sm text-gray-700 hover:bg-rose-600 hover:text-white">Snacks <i class="far fa-angle-right absolute top-0 mt-1 right-5 text-white text-lg"></i></span>
              </li>
              <li class="dm-item" data-target="#dm8">
                <span class="block relative py-2 px-4 text-sm text-gray-700 hover:bg-rose-600 hover:text-white">Accesorios <i class="far fa-angle-right absolute top-0 mt-1 right-5 text-white text-lg"></i></span>
              </li>
              <li class="dm-item" data-target="#dm9">
                <span class="block relative py-2 px-4 text-sm text-gray-700 hover:bg-rose-600 hover:text-white">Marcas <i class="far fa-angle-right absolute top-0 mt-1 right-5 text-white text-lg"></i></span>
              </li>

              --}}
            </ul>
        </div>

      </div>
      <div class="objective">
        <button class="btn bg-gray-200 flex py-4 px-3 text-left text-sm text-gray-500 items-center" data-target="#dropdownObjective" data-toggle="dropdown" data-overlay="true" id="btnObjective">
          <span class="icon pr-3">
            <i class="fal fa-medal fa-2x"></i>
          </span>
          <span class="icon-text leading-4 pr-2">¿Cuál es tu <br>objetivo?</span>
          <span class="icon-right block pl-2">
            <i class="far fa-angle-down ease-in duration-200 text-xl"></i>
          </span>
        </button>
        <div id="dropdownObjective" class="dropdown-menu-c left-2/4 absolute hidden z-20 w-4/5 text-base list-none bg-white shadow mx-auto" style="transform: translateX(-50%);">
            <ul class="grid grid-rows-9 grid-flow-col gap-4 px-4 pt-4 pb-7 text-center text-sm" aria-labelledby="dropdownMenuButton">
                <li>
                  <a class="hover:text-rose-600" href="">
              <img src="asset/image/tags/aumentar-energia.png" class= 'w-20 mx-auto' alt="">
              <p class="mt-1">Perder peso y Tonificar</p>
              </a>
            </li>
            <li>
              <a class="hover:text-rose-600" href="">
              <img src="asset/image/tags/construir-musculo.png" class= 'w-20 mx-auto' alt="">
              <p class="mt-1">Perder peso y Tonificar</p>
              </a>
            </li>
            <li>
              <a class="hover:text-rose-600" href="">
              <img src="asset/image/tags/definicion-muscular.png" class= 'w-20 mx-auto' alt="">
              <p class="mt-1">Perder peso y Tonificar</p>
              </a>
            </li>
            <li>
              <a class="hover:text-rose-600" href="">
              <img src="asset/image/tags/mejorar-rendimiento.png" class= 'w-20 mx-auto' alt="">
              <p class="mt-1">Perder peso y Tonificar</p>
              </a>
            </li>
            <li>
              <a class="hover:text-rose-600" href="">
              <img src="asset/image/tags/organicos-y-naturales.png" class= 'w-20 mx-auto' alt="">
              <p class="mt-1">Perder peso y Tonificar</p>
              </a>
            </li>
            <li>
              <a class="hover:text-rose-600" href="">
              <img src="asset/image/tags/perder-peso-y-tonificar.png" class= 'w-20 mx-auto' alt="">
              <p class="mt-1">Perder peso y Tonificar</p>
              </a>
            </li>
            <li>
              <a class="hover:text-rose-600" href="">
              <img src="asset/image/tags/salud-y-biniestar.png" class= 'w-20 mx-auto' alt="">
              <p class="mt-1">Perder peso y Tonificar</p>
              </a>
            </li>
            <li>
              <a class="hover:text-rose-600" href="">
              <img src="asset/image/tags/aumentar-energia.png" class= 'w-20 mx-auto' alt="">
              <p class="mt-1">Perder peso y Tonificar</p>
              </a>
            </li>
            <li>
              <a class="hover:text-rose-600" href="">
              <img src="asset/image/tags/mejorar-rendimiento.png" class= 'w-20 mx-auto' alt="">
              <p class="mt-1">Perder peso y Tonificar</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="search-container py-3 px-5 w-2/5 mx-auto">
        <div class="search px-5 flex">
          <input class="placeholder:text-slate-400 block bg-white w-full border-b border-gray-600 py-2 pl-6 pr-3 shadow-sm focus:outline-none sm:text-sm" placeholder="¿Qué estas buscando?" type="text" name="search" data-target="#dropdownSearch" data-toggle="focus" />
          <i class="fal fa-search fa-2x ml-4 text-gray-600"></i>
        </div>
        <div id="dropdownSearch" class="dropdown-menu-s right-20 absolute hidden z-20 w-96 text-base bg-white shadow mr-10">
          <div class="autocomplete-list pb-3 pt-6">
          <h4 class="text-md uppercase px-4"><strong>Términos más buscados</strong></h4>
            <ul class="list-none text-left text-sm" aria-labelledby="dropdownMenuButton">
                <li>
                  <a class="block hover:bg-gray-200 px-3 py-2" href="/"><span class="a-counter w-3 mr-2">1</span> c4</a>
                </li>
                <li>
                  <a class="block hover:bg-gray-200 px-3 py-2" href="/"><span class="a-counter w-3 mr-2">2</span> creatina</a>
                </li>
            </ul>
            </div>
        </div>
      </div>
      <div class="account w-16 text-center">
        <a href="/account" class="py-3 px-2 inline-block">
          <i class="fal fa-user fa-2x text-gray-600"></i>
        </a>
      </div>
      <div class="wishlist w-16 text-center">
        <a href="/wish" class="py-3 px-2 inline-block">
          <i class="fal fa-heart fa-2x text-gray-600"></i>
        </a>
      </div>
      <div class="cart-section w-16 text-center">
        <button class="btn py-3 px-2 inline-block relative" data-target="#dropdownMinicart" data-toggle="click" data-overlay="true">
          <i class="fal fa-shopping-cart fa-2x text-gray-600"></i>
          <sup class="absolute top-2 right-0 text-red-500"><i class="fa fa-glass fa-2x"></i><span class="cart-counter absolute left-2 top-15 text-white" style="top:15px;left:6px;">0</span></sup>
        </button>
      </div>
    </div>
  </div>
  </div>
</div>
<div id="dropdownMinicart" class="dropdown-menu-cs right-0 absolute hidden z-40 w-80 text-base bg-white shadow-md">
  <div class="mc-content py-4 px-3">
    <p class="text-center">No hay productos en tu bolsa</p>
  </div>
</div>
<div class="overlay fixed left-0 right-0 bottom-0 top-0 bg-red-900 z-10 opacity-50" style="display: none;"></div>
<div class="overlay-2 fixed left-0 right-0 bottom-0 top-0 z-30 opacity-50" style="display: none;"></div>

<!-- ************************************* -->
<!-- FIN DEL COPONENTE HEADER ------->
<!-- ************************************* -->

<x-slider_news />

@yield('content')

<!-- MERODOS DE PAGO -->
<x-pay />
<!-- FIN DE METODOS DE PAGO -->


<!-- FOOTER -->
<x-footer />
<!-- FIN DE FOOTER -->

<!-- Scrips -->


<script type="text/javascript">
  $(document).ready(function(){


    /* SLIDER

    */
    $('.slider-banners').slick({
      lazyLoad: 'ondemand',
      autoplay: true,
      autoplaySpeed: 1200,
    });

    $('.slider-anuncios').slick({
      lazyLoad: 'ondemand',
      arrows: true,
    });

    $('.btn-close').on('click', function (event) {
      $('.sa-main').slideUp('fast')
    })

     //FIN DEL SLDER


     // SLIDER DE PRODUCTOS
     $('.products').slick({
      lazyLoad: 'ondemand',
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 5,
      slidesToScroll: 5,
      responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
      ]
      })

     // FIN DE SLIDER DE PRODUCTOS

     //FOOTER

     $('#btnFToggle').on('click', function (event) {
      $('.f-bottom').slideToggle()
      $(this).find('span').toggleClass('block').toggleClass('hidden')
      $(this).find('i').toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up')
    })

     //FIN DEL FOOTER


    $.fn.pos = function(from, parent) {
      parent = $(parent).length ? $(parent) : this.parent()
      var right = $(document).width() - (parent.offset().left + parent.outerWidth());
      $(this).css({
        'top': $(from) ? $(from).height() : '',
        'right': right,
      });
      return '';
    }
    function overlay(el, type) {
      if(type == 1) {
        $(el).show()
      } else {
        $(el).hide()
      }
    }

    $('.dm-item').on('mouseenter', function (event) {
      //$('.dropdown-menu').removeClass('dm-active');
      //$(this).find('.dropdown-menu').addClass('dm-active')
    })
    /*$('.dm-item').on('mouseleave', function (event) {
      $('.dropdown-menu').removeClass('dm-active');
    })*/

    $('[data-toggle="dropdown"]').on('mouseenter', function (event) {
      var el = $($(this).data('target')),
        showOverlay = $(this).data('overlay')
      $(this).find('.icon-right i').addClass('rotate-180')
      el.show()
      if (showOverlay) overlay('.overlay', 1)
    })
    $('[data-toggle="dropdown"]').on('mouseleave', function (event) {
      var el = $($(this).data('target')),
        showOverlay = $(this).data('overlay')
      $(this).find('.icon-right i').removeClass('rotate-180')
      el.hide()
      overlay('.overlay', 2)
    })

    $('.dropdown-menu-c').on('mouseenter', function (event) {
      var el = $('[data-target="#'+$(this).attr('id')+'"]')
      el.addClass('btn-active')
      el.find('.icon-right i').addClass('rotate-180')
      event.stopPropagation()
      $(this).show()
      overlay('.overlay', 1)
    })
    $('.dropdown-menu-c').on('mouseleave', function (event) {
      var el = $('[data-target="#'+$(this).attr('id')+'"]')
      el.removeClass('btn-active')
      el.find('.icon-right i').removeClass('rotate-180')
      $(this).hide()
      overlay('.overlay', 2)
    })

    //Search
    $('[data-toggle="focus"]').on('focus', function (event) {
      var el = $($(this).data('target'))
      el.show()
      el.pos('')
    })
    $('[data-toggle="focus"]').on('focusout', function (event) {
      var el = $($(this).data('target'))
      el.hide()
    })

    $('[data-toggle="click"]').on('click', function (event) {
      var el = $($(this).data('target'))
      el.show()
      el.pos('.header', $(this))
      overlay('.overlay-2', 1)
    })
    $('.overlay-2').on('click', function (event) {
      var el = $($('[data-toggle="click"]').data('target'))
      el.hide()
      overlay('.overlay-2', 2)
    })
    $('.dropdown-menu-cs').on('click', function (event) {
      event.stopPropagation()
    })
  });

</script>

</body>
</html>

