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
              <li class="dm-item" data-target="#dm1">
                <span class="block relative py-2 px-4 text-sm text-white bg-lime-600 hover:bg-rose-600 hover:text-white">Orgánicos y Naturales <i class="far fa-angle-right absolute top-0 mt-1 right-5 text-white text-lg"></i></span>
                <div class="dropdown-menu absolute left-full top-0 bg-white w-96 px-7 py-8" id="dm1" style="width: 500px;">
                  <div class="smenu-header mb-3 md:mb-8">
                    <a class="block text-md text-gray-500 border-b border-gray-400" href="/organicos-y-naturales"><i class="far fa-leaf mr-3 text-orange-500"></i><strong>ORGÁNICOS</strong></a>
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