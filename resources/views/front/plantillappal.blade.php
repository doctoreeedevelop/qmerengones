
@include('front/header')


<!-- Sidebar Lado derecho sale con menu hamburguesa -->
<aside class="wrap-sidebar js-sidebar">
	<div class="s-full js-hide-sidebar"></div>

	<div class="sidebar flex-col-l p-t-22 p-b-25">
		<div class="flex-r w-full p-b-30 p-r-27">
			<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
				<i class="zmdi zmdi-close"></i>
			</div>
		</div>
	<span class="barra">

		<div class="barra1">
			<input type="text" placeholder="buscar">
			<a href="#">
		{{-- 	<box-icon name='search-alt-2'></box-icon> --}}
				<i class="busqueda"></i>
			</a>
		</div>
	</span>

		<div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
			<ul class="sidebar-link w-full">
				<li class="p-b-13">
					<a href="index.html" class="stext-102 cl2 hov-cl1 trans-04">
						Perfil
					</a>
				</li>

				<li class="p-b-13">
					<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
						Iniciar sesion
					</a>
				</li>

				<li class="p-b-13">
					<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
					Registrate
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
					Tienda Del Peluquero El Transito
				</span>

				<div class="flex-w flex-sb p-t-36 gallery-lb">
					<!-- item gallery sidebar -->
					<div class="wrap-item-gallery m-b-10">
						<a class="item-gallery bg-img1" href="{{ asset ('asset/plantillappal/images/gallery-01.jpg') }}" data-lightbox="gallery" 
						style="background-image: url('images/gallery-01.jpg');"></a>
					</div>

					<!-- item gallery sidebar -->
					<div class="wrap-item-gallery m-b-10">
						<a class="item-gallery bg-img1" href="images/gallery-02.jpg" data-lightbox="gallery" 
						style="background-image: url('images/gallery-02.jpg');"></a>
					</div>

					<!-- item gallery sidebar -->
					<div class="wrap-item-gallery m-b-10">
						<a class="item-gallery bg-img1" href="images/gallery-03.jpg" data-lightbox="gallery" 
						style="background-image: url('images/gallery-03.jpg');"></a>
					</div>

					<!-- item gallery sidebar -->
					<div class="wrap-item-gallery m-b-10">
						<a class="item-gallery bg-img1" href="images/gallery-04.jpg" data-lightbox="gallery" 
						style="background-image: url('images/gallery-04.jpg');"></a>
					</div>

					<!-- item gallery sidebar -->
					<div class="wrap-item-gallery m-b-10">
						<a class="item-gallery bg-img1" href="images/gallery-05.jpg" data-lightbox="gallery" 
						style="background-image: url('images/gallery-05.jpg');"></a>
					</div>

					<!-- item gallery sidebar -->
					<div class="wrap-item-gallery m-b-10">
						<a class="item-gallery bg-img1" href="images/gallery-06.jpg" data-lightbox="gallery" 
						style="background-image: url('images/gallery-06.jpg');"></a>
					</div>

					<!-- item gallery sidebar -->
					<div class="wrap-item-gallery m-b-10">
						<a class="item-gallery bg-img1" href="images/gallery-07.jpg" data-lightbox="gallery" 
						style="background-image: url('images/gallery-07.jpg');"></a>
					</div>

					<!-- item gallery sidebar -->
					<div class="wrap-item-gallery m-b-10">
						<a class="item-gallery bg-img1" href="images/gallery-08.jpg" data-lightbox="gallery" 
						style="background-image: url('images/gallery-08.jpg');"></a>
					</div>

					<!-- item gallery sidebar -->
					<div class="wrap-item-gallery m-b-10">
						<a class="item-gallery bg-img1" href="images/gallery-09.jpg" data-lightbox="gallery" 
						style="background-image: url('images/gallery-09.jpg');"></a>
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


<!-- MINI CARRITO LATERAL -->
@include('includes/minicarrito') 
<!-- FIN MINI CARRITO LATERAL FIN-->


<!-- Slider inicio ppal-->
{{-- <section class="section-slide">
	<div class="wrap-slick1 rs2-slick1">
		<div class="slick1">
			<div class="item-slick1 bg-overlay1" style="background-image: url({{ asset ('asset/plantillappal/imagenes/m1.jpg') }});" data-thumb="{{ asset ('asset/plantillappal/imagenes/mini1.jpg') }}"  data-caption="AQUI">
				<div class="container h-full">
					<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
							<span class="ltext-202 txt-center cl0 respon2">
								
					 		</span>
						</div>
							
						<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
							<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
								Qmerengones
							</h2>
						</div>
							
						<div class="bot layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
							<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg11 bor1 hov-btn2 p-lr-15 trans-04">
								Whatsapp
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="item-slick1 bg-overlay1" style="background-image: url({{ asset ('asset/plantillappal/imagenes/m2.jpg') }});" data-thumb="{{ asset ('asset/plantillappal/imagenes/mini2.jpg') }}"  data-caption="AQUI">
				<div class="container h-full">
					<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
							<span class="ltext-202 txt-center cl0 respon2">
								Los Mejores Precios
							</span>
						</div>
							
						<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
							<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
								DEL MERCADO
							</h2>
						</div>
							
						<div class="bot layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
							<a href="product.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Productos
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="item-slick1 bg-overlay1" style="background-image: url({{ asset ('asset/plantillappal/imagenes/m3.png') }});" data-thumb="{{ asset ('asset/plantillappal/imagenes/mini3.jpg') }}"  data-caption="AQUI">
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
</section>    --}}
 
<section class="section-slide">
	<div class="wrap-slick1 rs2-slick1">
		<div class="slick1">
			<div class="item-slick1 bg-overlay1" style="background-image: url({{ asset ('asset/plantillappal/imagenes/m1.jpg') }});" data-thumb="{{ asset ('asset/plantillappal/imagenes/mini1.jpg') }}" data-caption="Women’s Wear">
				<div class="container h-full">
					<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
							{{-- <span class="ltext-202 txt-center cl0 respon2">
								Women Collection 2018
							</span> --}}
						</div>
							
						<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
							<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
								<img src="{{ asset ('asset/plantillappal/imagenes/qmerengones.png')}}" alt="">
							</h2>
						</div>
							
						<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
							<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								{{-- Whatsapp --}}
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="item-slick1 bg-overlay1" style="background-image: url({{ asset ('asset/plantillappal/imagenes/m2.jpg') }});" data-thumb="{{ asset ('asset/plantillappal/imagenes/mini2.jpg') }}" data-caption="Men’s Wear">
				<div class="container h-full">
					<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
							<span class="ltext-202 txt-center cl0 respon2">
								Los Mejores Precios
							</span>
						</div>
							
						<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
							<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
								DEL MERCADO
							</h2>
						</div>
							
						<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
							<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Productos
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="item-slick1 bg-overlay1" style="background-image: url({{ asset ('asset/plantillappal/imagenes/m3.png') }});" data-thumb="{{ asset ('asset/plantillappal/imagenes/mini3.jpg') }}" data-caption="Men’s Wear">
				<div class="container h-full">
					<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
							<span class="ltext-202 txt-center cl0 respon2">
								Aprovecha Las Promociones
							</span>
						</div>
							
						<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
							<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
								NEW SEASON
							</h2>
						</div>
							
						<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
							<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Shop Now
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="wrap-slick1-dots p-lr-10"></div>
	</div>
	
</section> 
<!-- BOTON FLOTANTE DE WHATSAPP -->


<!-- CATEGORIAS -->
<section class="seccat">
	<div class="container">
		
			<div class="ltext-201 m-t-80 m-b-60">
				Categorias
			</div>
		
		<main>


		
			@foreach ($categorias as $categoria)
			
				<section class="tarjeta">
					<div class="face front">
						{{-- {{$categoria->imgppal}} --}}

						@if ($categoria->images->count()<=0)
							<img src="{{ asset ('asset/plantillappal/imagenes/sinimagen.jpg')}}" alt="">
						@else
							<img src="{{ $categoria->images[0]->url }}" alt=""> 
						@endif
						<h3>{{$categoria->name}}</h3> 
					</div>
					<div class="face back">
						{{-- <img src="{{$categoria->imgppal}}" alt=""> --}}
						<h3> {{$categoria->name}}</h3>
						<p>{{$categoria->description}}</p>
						<div class="link">
							<a href="{{ route('categoria', $categoria->id) }}">Ver</a>
						</div>
					</div>
				</section>

				
			@endforeach


		</main>	
	</div>		
</section>		
<div id="apiplanppal">
<!-- seccion mas vendidos Lo Mas Recomendado -->

<section class="seccat bg0">

	<div class="container">	
		
		<div class="ltext-201">
			Lo Mas Recomendado 
		</div>
		<section class="maindos">
			@foreach ($masvendidos as $masvendido)  


			<section class="carddos">

				<!-- Block2 -->

				<div class="carduno block2-pic hov-img0">
					
								@if($masvendido->porcentaje_descuento > 0)
									<div class="promo labelpromo" data-labelpromo="{{$masvendido->porcentaje_descuento}}">
										<div class="promoint">
											{{$masvendido->porcentaje_descuento}}% 
										</div>
									</div>
								@endif

								{{-- <img class="imgcat" src="{{ $promocion[0]->images[0]->url}}" alt="">   --}}  



								@if ($masvendido->images->count()<=0)
									<img class="imgmasv" src="{{ asset ('asset/plantillappal/imagenes/sinimagen.jpg')}}" alt="IMG-PRODUCT">
								@else
									<img class="imgmasv" src="{{ $masvendido->images[0]->url}}" alt="">   
								@endif
						

								<a href="{{ route('detalle', $masvendido->id) }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 jjs-show-modal1">
									Detalle...
								</a>
						
				</div>
				{{-- <div class="botoncar2">
					<form action="{{route('add')}}" method="POST">
						@csrf
						<input type="hidden" name="id" value="{{$masvendido->id}}">
						<input type="submit" name="btn" class="botonagrega2 flex-c-m stext-100 cl0 size-90 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" value="Agregar al carrito">
					</form>
				</div> --}}
				<div class = extbtnloquiero>
					<a href="{{route('cartadd', $masvendido->id)}}" 
						class="botondos stext-103 trans-04 "
						v-on:click="agregoalcart({{$masvendido->id}})"  
						>
						Lo Quiero
					</a> 
				</div>
					

				<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									{{$masvendido->nombre}}
								</a>

								<span class="stext-105 cl3">
									${{$masvendido->precio_actual}}
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="{{ asset ('asset/plantillappal/images/icons/icon-heart-01.png') }}" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset ('asset/plantillappal/images/icons/icon-heart-02.png') }}" alt="ICON">
								</a>
							</div>
				</div>
				

			</section>
			@endforeach 
		</section>
	
	</div>

</section>


 

{{-- seccion promociones --}}

<section class="seccat bg0">

	<div class="container">	
		
		<div class="ltext-201">
			Delicias en Promocion 
		</div>
		<section class="maindos">
			@foreach ($promociones as $promocion)  



			<section class="tarjeta2 carddos">

				<!-- Block2 -->

				<div class="carduno block2-pic hov-img0">
				

									
								@if($promocion->porcentaje_descuento > 0)
									<div class="promo labelpromo" data-labelpromo="{{$promocion->porcentaje_descuento}}">
										<div class="promoint">
											{{$promocion->porcentaje_descuento}}% 
										</div>
									</div>
								@endif			
					
								{{-- <img class="imgcat" src="{{ $promocion[0]->images[0]->url}}" alt="">   --}}  								@if ($promocion->images->count()<=0)
								
								<img class="imgmasv" src="{{ asset ('asset/plantillappal/imagenes/sinimagen.jpg')}}" alt="IMG-PRODUCT">
								@else
									<img class="imgmasv" src="{{ $promocion->images[0]->url}}" alt="">   
								@endif
						

								<a href="{{ route('detalle', $promocion->id) }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 jjs-show-modal1">
									Detalle...
								</a>
						
				</div>
				{{-- <div class="botoncar2">
					<form action="{{route('add')}}" method="POST">
						@csrf
						<input type="hidden" name="id" value="{{$masvendido->id}}">
						<input type="submit" name="btn" class="botonagrega2 flex-c-m stext-100 cl0 size-90 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" value="Agregar al carrito">
					</form>
				</div> --}}

				

				<div class = extbtnloquiero>
					<a href="{{route('cartadd', $promocion->id)}}" 
						class="botondos stext-103 trans-04 "
						v-on:click="agregoalcart({{$promocion->id}})"  
						>
						Lo Quiero
					</a> 
				</div>


				<div class="block2-txt flex-w flex-t p-t-14">
						<div class="block2-txt-child1 flex-col-l ">
							<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								{{$promocion->nombre}}
							</a>

							<span class="stext-105 cl3">
								${{$promocion->precio_actual}}
							</span>
						</div>

						<div class="block2-txt-child2 flex-r p-t-3">
										<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
											<img class="icon-heart1 dis-block trans-04" src="{{ asset ('asset/plantillappal/images/icons/icon-heart-01.png') }}" alt="ICON">
											<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset ('asset/plantillappal/images/icons/icon-heart-02.png') }}" alt="ICON">
										</a>
						</div>
				</div>
				

			</section>
			@endforeach 
		</section>
	
	</div>

</section>
</div> {{-- cierre<id =apiheadplanppal></id> --}}






{{-- paralax --}}

<section>

<div class="extparalax container-fluid">
	<div class="row">
		<div class="img1 col-12">
			
		


		<div class="ltext-201 m-t-80 m-b-60">
			<p>Los Mejores Productos</p>
		</div>

	</div>



	{{-- 	<section class="paralastex">
			<h2>Disfrutalos Siempre!!!</h2>
		</section> --}}



		{{-- <div class="img2 col-6">
		</div> --}}

	</div>

</div>

</section>

{{-- seccion testimonios --}}

<section>			
		<div class="testimonio">
			<h3 class="titulo3">Lo que dicen nuestros clientes</h3>
			<div class="testiext">

				<div class="testiextuno">
					<div class="testipartes">

						<div class="testipartesint">								
							<div class="ciculofotocliente1">
							</div>		
							<div class="testitextouno colorletra">

								Lorem, ipsum dolor sit amet consectetur adipisicing elit.
								Minima aspernatur mollitia laboriosam obcaecati tempore quam 
								sapiente. Suscipit aut minus dolorem earum quibusdam nam
							</div>
							<strong>Meliza martinez.</strong>
						</div>
						<div class="testipartesint">
							<div class="ciculofotocliente2">
							</div>
							<div class="testitextouno colorletra">
								dolor sit amet consectetur adipisicing elit. 
								Perspiciatis laboriosam 
								t quod? Suscipit corporis aspernatur vero impedit soluta ex aut.
							</div>
								
							<strong>Julio Jimenez.</strong>
						</div>	
						<div class="testipartesint">
							<div class="ciculofotocliente3">
							</div>
							<div class="testitextouno colorletra">
								dolor sit amet consectetur adipisicing elit. 
								Perspicia labsam 
								t quod? Satur vero impedit soluta ex aut.
							</div>	
							<strong>Oscar Borda.</strong>
						</div>	
						<div class="testipartesint">
							<div class="ciculofotocliente4">
							</div>	
							<div class="testitextouno colorletra" >
								adipisicing elit. 
								Perspiciatis 
								t quod? Suscipit spernatur . 
								Lorem ipsum dolor sit amet consectetur a
								dipisicing elit. Voluptatibus explicabo quod autem.
								 Voluptate ipsa autem ea ullam corrupti labore expedita
							</div>
							<strong>Remberto rodriguez.</strong>
						</div>	

						

					</div>
					<div class="imgclientesvarios colorletra">
						<div class="imgcli1">

						</div>
						<div class="imgcli2">

						</div>
						<div class="imgcli3">

						</div>
					</div>
					
				

				</div>
			</div>






		
			<p class="titulo5"></p>
			<p class="parrafo">Conoce los testimonio de Nuestros clientes  que confiaron en nosotros, llenos de amor e inspiracion.</p>
			<div class="">
				<a href="testimonios.php" class="flex-c-m stext-101 cl0  bg10 bor1 hov-btn2 p-lr-15 trans-04" tabindex="-1">
					Ver Testimonios
				</a>
			</div>
		 </div>
</section>	


{{-- seccion slider pequeño --}}

{{-- <section class="slider1">

	<div class="slider">
		<div class="slide-track">
			<div class="slide"><img src="{{ asset ('asset/plantillappal/img/slipno6.jpg') }}" alt=""></div>
			<div class="slide"><img src="{{ asset ('asset/plantillappal/img/slipno2.jpg') }}" alt=""></div>
			<div class="slide"><img src="{{ asset ('asset/plantillappal/img/slipno3.jpg') }}" alt=""></div>
			<div class="slide"><img src="{{ asset ('asset/plantillappal/img/slipno7.jpg') }}" alt=""></div>
			<div class="slide"><img src="{{ asset ('asset/plantillappal/img/slipno8.jpg') }}" alt=""></div>
			<div class="slide"><img src="{{ asset ('asset/plantillappal/img/slipno9.jpg') }}" alt=""></div>
			<div class="slide"><img src="{{ asset ('asset/plantillappal/img/slipno2.jpg') }}" alt=""></div>
			<div class="slide"><img src="{{ asset ('asset/plantillappal/img/slipno3.jpg') }}" alt=""></div>
			<div class="slide"><img src="{{ asset ('asset/plantillappal/img/slipno6.jpg') }}" alt=""></div>
			<div class="slide"><img src="{{ asset ('asset/plantillappal/img/slipno7.jpg') }}" alt=""></div>
			<div class="slide"><img src="{{ asset ('asset/plantillappal/img/slipno8.jpg') }}" alt=""></div>
			<div class="slide"><img src="{{ asset ('asset/plantillappal/img/slipno2.jpg') }}" alt=""></div>
			<div class="slide"><img src="{{ asset ('asset/plantillappal/img/slipno3.jpg') }}" alt=""></div>
			<div class="slide"><img src="{{ asset ('asset/plantillappal/img/slipno9.jpg') }}" alt=""></div>
		</div>
	</div>
</section> --}}



</body>
<!-- Footer -->

@include('front/footer') 
