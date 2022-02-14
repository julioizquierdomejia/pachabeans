<footer class="footer mt-6 md:mt-12">
	<div class="f-top bg-zinc-200 relative">
		<div class="container mx-auto py-5 md:py-7 lg:pt-11 xl:pt-12 text-gray-700 text-sm">
			<div class="flex flex-wrap items-center px-3 md:px-0 md:pt-7">
				<div class="ft-item mb-4 md:mb-0 w-1/2 lg:w-1/5 text-sm">
					<h5 class="text-gray-500"><strong>SÍGUENOS</strong></h5>
					<ul class="text-gray-600 inline-grid grid-cols-4 gap-9 text-xl mb-3">
						<li>
							<a class="ft-rs" href="/"><i class="fab fa-facebook-f"></i></a>
						</li>
						<li>
							<a class="ft-rs" href="/"><i class="fab fa-instagram"></i></a>
						</li>
						<li>
							<a class="ft-rs" href="/"><i class="fab fa-twitter"></i></a>
						</li>
						<li>
							<a class="ft-rs" href="/"><i class="fab fa-youtube"></i></a>
						</li>
					</ul>
					<a href="/">
						<img src="{{ asset('assets/images/boton-localizar-tiendas.png') }}" width="200">
					</a>
				</div>
				<div class="ft-item mb-4 md:mb-0 w-1/2 lg:w-1/4">
					<p class="mb-1">FonoCompras: +51 6429997</p>
					<p class="mb-1">Compras Online: 936105037</p>
					<p>Venta Mayorista: 988658427</p>
				</div>
				<div class="ft-item mb-4 md:mb-0 w-full lg:w-1/4">
					<ul>
						<li>
							<p class="mb-1"><small><i class="fa fa-circle text-red-500 mr-2"></i></small><strong>Horario de Atención Compras Online:</strong></p>
							<p class="mb-1"><span class="ml-5">Lunes a Viernes de 9:00am a 6:30pm</span></p>
						</li>
						<li>
							<p class="mb-1"><small><i class="fa fa-circle text-red-500 mr-2"></i></small><strong>Horario de Atención Reparto:</strong></p>
							<p class="mb-1"><span class="ml-5">Lunes a Sábado de 8:00am a 6:00pm</span></p>
						</li>
					</ul>
				</div>
				<div class="ft-item w-full lg:w-1/4">
					<div class="md:absolute md:bottom-5 w-full md:w-80">
						<form class="form-newsletter text-center relative bg-white shadow-[0px_0px_7px_1px_rgba(0,0,0,0.3)] px-5 py-7 md:py-12 md:-mt-6">
							<div class="border-2 border-green-500 w-8 mx-auto mb-3"></div>
							<h3 class="fn-title text-lg"><strong>Suscríbete al Newsletter</strong></h3>
							<h5 class="text-lg text-lime-500 mb-4"><strong style="font-weight: 900;">¡Seamos un equipo!</strong></h5>
							<div class="px-3">
								<input class="placeholder:text-slate-400 block bg-white w-full border border-gray-300 rounded py-2 px-3 shadow-sm focus:outline-none sm:text-sm" placeholder="Ingresa tu email" type="text" name="newsletter" data-target="#dropdownSearch" data-toggle="focus" />
							</div>
							<div class="buttons mt-4">
								<button type="button" class="btn bg-lime-500 text-white -skew-x-12 px-5 py-1">
									<strong class="inline-block skew-x-12">¡QUIERO SER PARTE!</strong>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="ft-buttons text-center">
			<button class="btn bg-white inline-flex items-center" id="btnFToggle">
				<strong class="inline-block px-3 text-gray-700 text-sm">
					<span class="info1 block">Menos información</span>
					<span class="info2 hidden">Más información</span>
				</strong>
				<i class="far fa-angle-double-down px-3 py-2 bg-gray-400 text-white text-xl leading-4"></i>
			</button>
		</div>
	</div>
	<div class="f-bottom text-sm">
		<div class="container mx-auto py-5">
			<div class="flex flex-wrap px-3 md:px-0">
				<div class="fb-item w-full md:w-3/4 mb-4 md:mb-0">
					<div class="fb-header mb-4">
						<h3 class="text-lg">
							<strong class="block">LINKS DE INTERÉS</strong>
							<span class="block w-10 border-2 border-rose-600"></span>
						</h3>
					</div>
					<div class="fb-content">
						<div class="flex flex-wrap">
							<div class="fb-c-item w-full md:w-1/3">
								<ul class="list-none">
									<li><a class="mb-1 block" href="">Contactanos</a></li>
									<li><a class="mb-1 block" href="">Sobre LAB NUTRITION</a></li>
								</ul>
							</div>
							<div class="fb-c-item w-full md:w-1/3">
								<ul class="list-none">
									<li><a class="mb-1 block" href="">Políticas de Delivery</a></li>
									<li><a class="mb-1 block" href="">Términos y condiciones</a></li>
								</ul>
							</div>
							<div class="fb-c-item w-full md:w-1/3">
								<ul class="list-none">
									<li><a class="mb-1 block" href="">Libro de reclamaciones</a></li>
									<li><a class="mb-1 block" href="">Comprobantes electrónicos</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="fb-item w-full md:w-1/4">
					<div class="fb-header mb-4">
						<h3 class="text-lg">
							<strong class="block">MEDIOS DE PAGO</strong>
							<span class="block w-10 border-2 border-rose-600"></span>
						</h3>
					</div>
					<div class="fb-mp-content">
						<img src=" {{ asset('assets/images/pagos-seguros.jpg') }}" alt="Medios de pago" width="300">
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>