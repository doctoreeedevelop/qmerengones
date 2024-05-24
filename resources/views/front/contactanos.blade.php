@include('front/header')
<section class="bg-fondo">



		
</section>	

<!-- MINI CARRITO LATERAL -->
@include('includes/minicarrito')
<!-- FIN MINI CARRITO LATERAL FIN-->


	<!-- Title page -->
	{{-- <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			</h2>
			Contáctanos
	</section>	 --}}


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form id="contact-form" action="{{route('contact.mail')}}" method="POST">
						@csrf
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Mandanos Un Mensaje
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="m-t-90 stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Su Dirección De Correo Electrónico">
							<img class="how-pos4 pointer-none" src="{{ asset ('asset/plantillappal/images/icons/icon-email.png') }}" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="¿Como Podemos Ayudar?"></textarea>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Enviar
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Ubicación
							</span>

							<p class="lest stext-115 cl6 size-213 p-t-18">
								Q Merengones cl.54 #50-64, Villa Paula Itagüi Antioquia
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Numero De Celular
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								+57 315 560 71 81
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Soporte
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								qmerengones@gmail.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
	
	<!-- Map -->
	<div class="mapa">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7706750497055!2d-75.6062551267431!3d6.1614600272682045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4683ceacc90303%3A0xef57e48e523fffd!2sCl.%2050%20Sur%20%2346%2C%20Sabaneta%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1696904516882!5m2!1ses-419!2sco" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>

@include('front/footer') 