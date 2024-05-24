
	@include('layouts/plantillappal/header') 


	<!-- Sidebar -->
	<aside class="wrap-sidebar js-sidebar">
		<div class="s-full js-hide-sidebar"></div>

		<div class="sidebar flex-col-l p-t-22 p-b-25">
			<div class="flex-r w-full p-b-30 p-r-27">
				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

			<div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
				<ul class="sidebar-link w-full">
					<li class="p-b-13">
						<a href="index.html" class="stext-102 cl2 hov-cl1 trans-04">
							inicia sesion
						</a>
					</li>

					<li class="p-b-13">
						<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
							registrate
						</a>
					</li>

					<li class="p-b-13">
						<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
							My Account
						</a>
					</li>

					<li class="p-b-13">
						<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
							Track Oder
						</a>
					</li>

					<li class="p-b-13">
						<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
							Refunds
						</a>
					</li>

					<li class="p-b-13">
						<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
							Help & FAQs
						</a>
					</li>
				</ul>

				<div class="sidebar-gallery w-full p-tb-30">
					<span class="mtext-101 cl5">
						@ CozaStore
					</span>

					<div class="flex-w flex-sb p-t-36 gallery-lb">
						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="{{ asset ('asset/plantillappal/images/gallery-01.jpg') }}" data-lightbox="gallery" 
							style="background-image: url('{{ asset ('asset/plantillappal/imagesgallery-01.jpg') }};"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="{{ asset ('asset/plantillappal/images/gallery-02.jpg') }}" data-lightbox="gallery" 
							style="background-image: url('{{ asset ('asset/plantillappal/images/gallery-02.jpg'); }}"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="{{ asset ('asset/plantillappal/images/gallery-03.jpg') }}" data-lightbox="gallery" 
							style="background-image: url('{{ asset ('asset/plantillappal/images/gallery-03.jpg'); }}"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="{{ asset ('asset/plantillappal/images/gallery-04.jpg') }}" data-lightbox="gallery" 
							style="background-image: url('{{ asset ('asset/plantillappal/images/gallery-04.jpg'); }}"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="{{ asset ('asset/plantillappal/images/gallery-05.jpg') }}" data-lightbox="gallery" 
							style="background-image: url('{{ asset ('asset/plantillappal/images/gallery-05.jpg'); }}"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="{{ asset ('asset/plantillappal/images/gallery-06.jpg') }}" data-lightbox="gallery" 
							style="background-image: url('{{ asset ('asset/plantillappal/images/gallery-06.jpg'); }}"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="{{ asset ('asset/plantillappal/images/gallery-07.jpg') }}" data-lightbox="gallery" 
							style="background-image: url('{{ asset ('asset/plantillappal/images/gallery-07.jpg'); }}"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="{{ asset ('asset/plantillappal/images/gallery-08.jpg') }}" data-lightbox="gallery" 
							style="background-image: url('{{ asset ('asset/plantillappal/images/gallery-08.jpg'); }}"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="{{ asset ('asset/plantillappal/images/gallery-09.jpg') }}" data-lightbox="gallery" 
							style="background-image: url('{{ asset ('asset/plantillappal/images/gallery-09.jpg'); }}"></a>
						</div>
					</div>
				</div>

				<div class="sidebar-gallery w-full">
					<span class="mtext-101 cl5">
						About Us
					</span>

					<p class="stext-108 cl6 p-t-27">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur maximus vulputate hendrerit. Praesent faucibus erat vitae rutrum gravida. Vestibulum tempus mi enim, in molestie sem fermentum quis. 
					</p>
				</div>
			</div>
		</div>
	</aside>


	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="{{ asset ('asset/plantillappal/images/item-cart-01.jpg') }}" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								White Shirt Pleat
							</a>

							<span class="header-cart-item-info">
								1 x $19.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="{{ asset ('asset/plantillappal/images/item-cart-02.jpg') }}" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Converse All Star
							</a>

							<span class="header-cart-item-info">
								1 x $39.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="{{ asset ('asset/plantillappal/images/item-cart-03.jpg') }}" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Nixon Porter Leather
							</a>

							<span class="header-cart-item-info">
								1 x $17.00
							</span>
						</div>
					</li>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1 rs2-slick1">
			<div class="slick1">
				<div class="item-slick1 bg-overlay1" style="background-image: url( {{ asset ('asset/plantillappal/imagenes/img-carrusel.png);') }}" data-thumb="{{ asset ('asset/plantillappal/imagenes/principal.jpg') }}" data-caption="Whatsapp">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
									Tienda Del peluquero
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
									EL TRANSITO
								</h2>
							</div>
								
							<div class="bot layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
									Whatsapp
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1 bg-overlay1" style="background-image: url( {{ asset ('asset/plantillappal/imagenes/img-carrusel02.jpg);') }}" data-thumb="{{ asset ('asset/plantillappal/imagenes/principal2.jpg') }}" data-caption="Ver">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
									Los Mejores Precioso
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
									DEL MERCADO
								</h2>
							</div>
								
							<div class="bot layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
									Contactanos
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1 bg-overlay1" style="background-image: url( {{ asset ('asset/plantillappal/imagenes/img-carrusel03.jpg);') }}" data-thumb="{{ asset ('asset/plantillappal/imagenes/principal3.jpg') }}" data-caption="Ver">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
									Aprovecha Las Promociones
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
									PARA TI
								</h2>
							</div>
								
							<div class="bot layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
									Ver
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="wrap-slick1-dots p-lr-10"></div>
		</div>
	</section>

	<!-- CATEGORIAS -->
	<section class="bg0 p-t-23 p-b-130">
		<div class="container">
			<div class="color p-b-10">
				<h1 class=" centrar ltext-103 cl5">
					Categorias
				</h1>
			</div>
			<main>
				
				
				
				@foreach ($categorias as $categoria)
					<section class="tarjeta">
							<div class="face front">
							<img src="{{ asset ('asset/plantillappal/imagenes/capilar.jpg') }}" alt="">
							<h3>{{$categoria->nombre}}</h3>
						</div>
						<div class="face back">
							<h3> Productos Capilares</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum officiis eveniet obcaecati recusandae dolores alias?</p>
							<div class="link">
								<a href="{{ route('categoria', $categoria->id) }}">Ver</a>
							</div>
						</div>
					</section>
				@endforeach


				{{-- <h3>OTRAS CATEGORIAS</h3>	








				<section class="tarjeta">
				<div class="face front">
						<img src="{{ asset ('asset/plantillappal/imagenes/facial.jpg') }}" alt="">
						<h3>Productos Faciales</h3>
					</div>
					<div class="face back">
						<h3> Productos Faciales</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum officiis eveniet obcaecati recusandae dolores alias?</p>
						<div class="link">
							<a href="{{ asset ('asset/plantillappal/facial.php') }}">Ver</a>
						</div>
					</div>
				</section>
				<section class="tarjeta">
				<div class="face front">
						<img src="{{ asset ('asset/plantillappal/imagenes/electrico.jpg') }}" alt="">
						<h3>Productos Electricos De Bellaza</h3>
					</div>
					<div class="face back">
						<h3> Productos Electricos De Belleza</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum officiis eveniet obcaecati recusandae dolores alias?</p>
						<div class="link">
							<a href="{{ asset ('asset/plantillappal/electrico.php') }}">Ver</a>
						</div>
					</div>
				</section>
				<section class="tarjeta">
				<div class="face front">
						<img src="{{ asset ('asset/plantillappal/imagenes/maquillaje.jpg') }}" alt="">
						<h3>Productos De Maquillaje</h3>
					</div>
					<div class="face back">
						<h3> Productos De Maquillaje</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum officiis eveniet obcaecati recusandae dolores alias?</p>
						<div class="link">
							<a href="{{ asset ('asset/plantillappal/maquillaje.php') }}">Ver</a>
						</div>
					</div>
				</section>
				<section class="tarjeta">
				<div class="face front">
						<img src="{{ asset ('asset/plantillappal/imagenes/uñas.jpg') }}" alt="">
						<h3>Productos Para Las Uñas</h3>
					</div>
					<div class="face back">
						<h3> Productos Para Las Uñas</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum officiis eveniet obcaecati recusandae dolores alias?</p>
						<div class="link">
							<a href="{{ asset ('asset/plantillappal/uñas.php') }}">Ver</a>
						</div>
					</div>
				</section>
				<section class="tarjeta">
				<div class="face front">
						<img src="{{ asset ('asset/plantillappal/imagenes/tinturas.jpg') }}" alt="">
						<h3>Tintura Para El Cabello</h3>
					</div>
					<div class="face back">
						<h3> Tintura Para El Cabello</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum officiis eveniet obcaecati recusandae dolores alias?</p>
						<div class="link">
							<a href="{{ asset ('asset/plantillappal/tinturas.php') }}">Ver</a>
						</div>
					</div>
				</section>
				<section class="tarjeta">
				<div class="face front">
						<img src="{{ asset ('asset/plantillappal/imagenes/corporal.jpg') }}" alt="">
						<h3>Productos Corporales</h3>
					</div>
					<div class="face back">
						<h3> Productos Corporales</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum officiis eveniet obcaecati recusandae dolores alias?</p>
						<div class="link">
							<a href="{{ asset ('asset/plantillappal/corporal.php') }}">Ver</a>
						</div>
					</div>
				</section> --}}
			</main>		
	</section>

	<section class="p-t-23 p-b-130">
		<div class="container">
			<div class="fondo-categoria">

				<div class="p-b-10">
					<h3 class="titulo2 ltext-103 cl5">
						PRODUCTOS MAS VENDIDOS
					</h3>
				</div>
			</div>

			<div class="row isotope-grid">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0 label-new" data-label="New">
							<img src="{{ asset ('asset/plantillappal/imagenes/img-01.jpg') }}"  alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Vista Rapida
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									crema Corporal
								</a>

								<span class="stext-105 cl3">
									$9.900
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="{{ asset ('asset/plantillappal/imagenes/iconos/corazon.png') }}" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset ('asset/plantillappal/imagenes/iconos/corazon2.png') }}" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{ asset ('asset/plantillappal/imagenes/img-13.jpg') }}"  alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Vista Rapida
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Combo Manicure-
								</a>

								<div></div>

								<span class="stext-105 cl3">
									$22.000
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="{{ asset ('asset/plantillappal/imagenes/iconos/corazon.png') }}" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset ('asset/plantillappal/imagenes/iconos/corazon2.png') }}"alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{ asset ('asset/plantillappal/imagenes/img-06.jpg') }}"  alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Vista Rapida
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Combo Shampo
								</a>

								<span class="stext-105 cl3">
									$45.000
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="{{ asset ('asset/plantillappal/imagenes/iconos/corazon.png') }}"alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset ('asset/plantillappal/imagenes/iconos/corazon2.png') }}" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{ asset ('asset/plantillappal/imagenes/img-07.jpg') }}"  alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Vista Rapida
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Combo Shampo
								</a>

								<span class="stext-105 cl3">
									$48.000
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="{{ asset ('asset/plantillappal/imagenes/iconos/corazon.png') }}" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset ('asset/plantillappal/imagenes/iconos/corazon2.png') }}" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{ asset ('asset/plantillappal/imagenes/descarga2.jpg') }}"  alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Vista Rapida
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									perfume men temptation
								</a>

								<span class="stext-105 cl3">
									$79.900
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="{{ asset ('asset/plantillappal/imagenes/iconos/corazon.png') }}" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset ('asset/plantillappal/imagenes/iconos/corazon2.png') }}" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item shoes">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{ asset ('asset/plantillappal/imagenes/img-09.jpg') }}" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Vista Rapida
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									secadora
								</a>

								<span class="stext-105 cl3">
									$59.900
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="{{ asset ('asset/plantillappal/imagenes/iconos/corazon.png') }}" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset ('asset/plantillappal/imagenes/iconos/corazon2.png') }}"alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{ asset ('asset/plantillappal/imagenes/descarga.jpg') }}"  alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Vista Rapida
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Permufe Nature 4x1
								</a>

								<span class="stext-105 cl3">
									$39.900
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="{{ asset ('asset/plantillappal/imagenes/iconos/corazon.png') }}" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset ('asset/plantillappal/imagenes/iconos/corazon2.png') }}" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{ asset ('asset/plantillappal/imagenes/descarga3.jpg') }}"  alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Vista Rapida
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Crema Corporal Lubridem
								</a>

								<span class="stext-105 cl3">
									$17.900
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="{{ asset ('asset/plantillappal/imagenes/iconos/corazon.png') }}" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset ('asset/plantillappal/imagenes/iconos/corazon2.png') }}" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
	</section>




	<section>
        
			<div class="testimonio">
				<h3 class="titulo3">Testimonios</h3>
				<p class="titulo4">Tienda Del Peluquero</p>
				<p class="titulo5">EL TRANSITO</p>
				<p class="parrafo">conoce los testimonio de los clientes de la tienda del peluquero "EL TRANSITO" que confia en nosotros, llenos de amor e inspiracion</p>
				<a href="product.html" class="boton flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04" tabindex="-1">
					Ver testimonios
				</a>
		 	</div>
		

	 		 </section>	
  		</div>
	</body>

	<!-- Footer -->

	@include('layouts/plantillappal/footer') 
	