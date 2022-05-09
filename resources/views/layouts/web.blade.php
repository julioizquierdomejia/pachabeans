<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="slick/slick.css">
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">

</head>
<body>

  <!-- header -->
  <div class="w-full flex py-3 px-5 justify-between text-2xl text-gray-400">
    <div>Bienvenidos a <span class="font-semibold">PachaBans</span></div>
    <ul class="flex divide-x-2 text-xl">
      <li class="px-5 hover:text-gray-500"><a href="#">Mi cuenta <i class="fal fa-user ml-2"></i></a></li>
      <li class="px-5 hover:text-gray-500"><a href="#">Login</a></li>
      <li class="px-5 hover:text-gray-500"><a href="#">Registro</a></li>
    </ul>
  </div>
  <!-- fin header -->
  
  <!-- NavBar -->
  <nav class="bg-slate-800 flex text-slate-400 py-3 px-5 justify-between text-2xl">
    <div class="logo"><img src="img/logo_header.png" alt="" class="py-2 px-2"></div>

    <ul class="flex items-center">
      <li class="px-5 hover:text-white"><a href="#">Inicio</a></li>
      <li class="px-5 hover:text-white"><a href="#">Ofertas</a></li>
      <li class="px-5 hover:text-white"><a href="#">Suscripciones</a></li>
      <li class="px-5 hover:text-white"><a href="#">Contáctanos</a></li>
    </ul>

    <ul class="flex items-center">
      <li class="px-3"><i class="fas fa-search"></i></li>
      <li class="px-3"><i class="fas fa-cart-arrow-down"></i></li>
      <li class="px-3">S/. 00.00</li>
    </ul>

  </nav>
  <!-- fin NavBar -->

  <!-- slider Header -->
  <div class="slider">
    <div><img src="img/slider/slider1.png" alt=""></div>
    <div><img src="img/slider/slider1.png" alt=""></div>
    <div><img src="img/slider/slider1.png" alt=""></div>
  </div>
  <!-- Fin slider Header -->

  
  <!-- Container con Padding -->
  <div class="container mx-auto px-10">
    <h1 class="text-7xl font-bold">Nuestros Productos</h1>
    <h2 class="text-2xl text-gray-400">Los mejores cafe del mercado</h2>
    <h3 class="text-5xl text-lime-600 font-bold pt-6 pb-4">Cafe Junín</h3>
  </div>
  <!-- Fin Container con Padding -->

  @yield('content')
  

  <!-- Container con Padding -->
  <div class="container mx-auto px-10">
    <h3 class="text-5xl text-lime-600 font-bold pt-6 pb-4">Cafe Junín</h3>
  </div>
  <!-- Fin Container con Padding -->
  
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
          <h5 class="text-2xl ml-3 mt-3 text-gray-400">Cafe Jaen</h5>
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

  <!-- Container como lo Hacemos -->
  <div class="bg-gray-100">
    <div class="container mx-auto px-10 py-12">
      <h1 class="text-5xl font-bold">Como lo hacemos</h1>
      <h2 class="text-xl text-gray-400">Nuestra labor</h2>

      <div class="grid grid-cols-2 gap-4 mt-4">
        <div class="grid grid-cols-2 gap-8 mt-4">
          <div>
            <h6 class="font-semibold text-2xl text-pink-700">No tienes que venir cada vez que lo necesites</h6>
            <p class="text-lime-700 text-xl mt-2">
              Solo deberás ingresar a nuestro módulo de suscripciones e inscribirte como uno de nuestros suscriptores, y asi completando tus datos, estarás en nuestra lista par poder atender a tu solicitud y no tienes que preocuparte mas por venir por lo que mas te gusta
            </p>
          </div>
          <div>
            <img class='w-26' src="img/icono_email.png" alt="">
          </div>
        </div>
        
        <div class="grid grid-cols-2 gap-8 mt-4">
          <div>
            <h6 class="font-semibold text-2xl text-pink-700">No tienes que venir cada vez que lo necesites</h6>
            <p class="text-lime-700 text-xl mt-2">
              Solo deberás ingresar a nuestro módulo de suscripciones e inscribirte como uno de nuestros suscriptores, y asi completando tus datos, estarásn en nuestra lista par poder atender a tu solicitud y on tienes que preocuparte mas por venir por lo que mas te gusta
            </p>
          </div>
          <div>
            <img class='w-26' src="img/icono_cafe.png" alt="">
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- Fin Container como lo Hacemos -->


  <!-- Container con Padding Banners -->
  <div class="container mx-auto px-10 py-10">

    <div class="grid grid-cols-2 gap-4">
      <div>
        <img class='w-26 mx-auto' src="img/banners/banner_productos.png" alt="">
      </div>

      <div class="grid grid-rows-2 gap-4">
        <div>
          <img class='w-26 mx-auto' src="img/banners/banner_suscripcion.png" alt="">
        </div>
        <div>
          <img class='w-26 mx-auto' src="img/banners/banner_aboutus.png" alt="">
        </div>
      </div>

    </div>

  </div>
  <!-- Fin Container con Padding -->


  <!-- Container Por que Nuestro Café -->
  <div class="bg-gray-100">
    <div class="container mx-auto px-10 py-12">
      <h1 class="text-5xl font-bold">¿Por qué nuestro Café?</h1>
      <h2 class="text-xl text-gray-400">Como lo hacemos</h2>

      <div class="grid grid-cols-3 gap-4 mt-4 text-center">
        
        <div class="">
          <div>
            <img class='w-26 mx-auto' src="img/porque1.png" alt="">
          </div>
          <h6 class="font-semibold text-3xl text-pink-700 mt-4 mb-4">Café de origen único</h6>
          <p class='text-xl w-96 mx-auto'>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eu
          </p>
        </div>

        <div>
          <div>
            <img class='w-26 mx-auto' src="img/porque2.png" alt="">
          </div>
          <h6 class="font-semibold text-3xl text-pink-700 mt-4 mb-4">Método único de tostado</h6>
          <p class='text-xl w-96 mx-auto'>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eu
          </p>
        </div>

        <div>
          <div>
            <img class='w-26 mx-auto' src="img/porque3.png" alt="">
          </div>
          <h6 class="font-semibold text-3xl text-pink-700 mt-4 mb-4">Disfrutalo Fresco y recien tostado</h6>
          <p class='text-xl w-96 mx-auto'>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eu
          </p>
        </div>
        
        
      </div>

    </div>
  </div>
  <!-- Fin Container Por que Nuestro Café -->
  

  

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/all.js"></script>

  <script>
  $(document).ready(function(){
    $('.slider').slick({
      dots: true,
      autoplay: true,
      autoplaySpeed: 3000,
    });

  $('.slider_productos').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,

    prevArrow: '<span class="prev_arrow"><i class="fas fa-angle-left"></i></span>',
    nextArrow: '<span class="next_arrow"><i class="fas fa-angle-right"></i></span>',
  });

    


  });
  </script> 

</body>
</html>


