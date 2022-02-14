<div class="container mx-auto text-center py-5 md:py-7">
	<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 items-center">
		<div class="nev-item text-sm" data-text="Elige tu tienda favorita y recoge tu pedido">
			<img class="nev-icon mx-auto" src="{{ asset('assets/images/metodos/icono1.png') }}" width="126">
			<p class="nev-title text-gray-700 pt-3"><strong>Recojo en tienda</strong></p>
		</div>
		<div class="nev-item text-sm" data-text="Te lo enviaremos lo más pronto posible dentro de nuestra jornada operativa de 10:00 a 19:00">
			<img class="nev-icon mx-auto" src="{{ asset('assets/images/metodos/icono3.png') }}" width="126">
			<p class="nev-title text-gray-700 pt-3"><strong>Recojo en tienda</strong></p>
		</div>
		<div class="nev-item text-sm" data-text="Te llevamos tus pedidos a casa y puedes programarlos por rango de horas">
			<img class="nev-icon mx-auto" src="{{ asset('assets/images/metodos/icono2.png') }}" width="126">
			<p class="nev-title text-gray-700 pt-3"><strong>Recojo en tienda</strong></p>
		</div>
		<div class="nev-item text-sm" data-text="Aceptamos todos los métodos de pago">
			<img class="nev-icon mx-auto" src="{{ asset('assets/images/metodos/icono4.png') }}" width="126">
			<p class="nev-title text-gray-700 pt-3"><strong>Recojo en tienda</strong></p>
		</div>
	</div>
</div>
<div class="modal-container fixed w-full left-0 right-0 top-0 bottom-0 z-10" style="display: none;">
	<div class="flex w-full h-full items-center justify-center">
		<div class="modal w-4/5 md:w-3/5 lg:w-2/5 mx-auto p-5 bg-white z-20 rounded-md relative shadow shadow-gray-500">
			<button class="btn btn-mclose text-gray-700 absolute right-5 top-5"><i class="fal fa-times fa-2x"></i></button>
			<div class="modal-content p-5">
				<div class="container text-center">
					<h4 class="m-title text-3xl mb-6"><strong></strong></h4>
					<img class="m-icon mx-auto mb-4" src="" width="200">
					<div class="m-text text-2xl"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-bg absolute left-0 right-0 bottom-0 top-0 bg-black opacity-50 z-10"></div>
</div>