<!DOCTYPE html>
<html lang="es">
<head>
	<title>qmerengones</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset ('asset/plantillappal/imagenes/iconos/logo.png') }}"/>
<!--===============================================================================================-->	
	{{-- <link rel="icon" type="image/png" href="{{ asset ('asset/plantillappal/imagenes/iconos/logo2.png') }}"/> --}}
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('asset/plantillappal/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('asset/plantillappal/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('asset/plantillappal/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('asset/plantillappal/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('asset/plantillappal/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset ('asset/plantillappal/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('asset/plantillappal/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('asset/plantillappal/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset ('asset/plantillappal/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('asset/plantillappal/vendor/slick/slick.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('asset/plantillappal/vendor/MagnificPopup/magnific-popup.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('asset/plantillappal/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('asset/plantillappal/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('asset/plantillappal/css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('asset/plantillappal/css/styles.css') }}">
<!--===============================================================================================-->

	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	
</head>
<body class="animsition">

	<div class="menuredsocial">
        <ul class="redsocial">
            <li><a href="https://www.facebook.com/nelsondavid.echeverry" class="facebook">
					<i class="fa fa-facebook"></i>
				</a>
			</li>   
            <li>
				<a href="http://www." class="instagram">
					<i class="fa fa-instagram"></i>
				</a>
						
			</li>
			<li>
				<a href="https://wa.me/+57 315 560 71 81?text=Hola en que te podemos ayudar? " target="_blank">
					<i class="fa fa-whatsapp"></i>
				</a>
			</li>      		   
            {{-- <li>
				<a href="http://www." class="twitter">
					<i class="fa fa-twitter"></i>
				</a >
			</li> --}}
			<li>
				<a href="{{route('contactanos')}}" class="mail">
					<img style="height: 13px;" src="{{ asset ('asset/plantillappal/images/icons/icon-email.png') }}" alt="ICON">
				</a >
			</li>      
                  
        </ul>   
    </div>  
 









	{{-- <div id="apiheadplanppal"> --}}
	
	<!-- Header -->
	{{-- <header header-v3>
		<!-- Header desktop -->
		
			<!-- Topbar  MENU SECUNDARIO-->
			{{-- <div class="menusecuext"> --}}
			{{-- <div class="wrap-menu-desktop-mio">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Los mejores Productos  los Mejores precios !!!
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

						
						
						<a href="{{ route('cart')}}" class="flex-c-m trans-04 p-lr-25">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
								<path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
								</svg>			 
								X {{-- {{session()->get('total')}} --}}
							{{-- 	<span></span>
						</a>					

						<a href="{{ route('admin.usuario') }}"class="flex-c-m trans-04 p-lr-25">
							Registrate
						</a>


						<a href="{{ route('login') }}" class="flex-c-m trans-04 p-lr-25">
							Login
						</a>
						<a href="{{ route('logout') }}" class="flex-c-m trans-04 p-lr-25">
							salir
						</a>
						<div class="flex-c-m trans-04 p-lr-25">Cliente: {{session()->get('nombre_usuario') ?? 'Invitado'}}</div>
						@if (Route::has('login'))
							<a href="{{ route('admin') }}" class="flex-c-m trans-04 p-lr-25">
								Administrar
							</a>
						@auth
							<a href="{{ route('login') }}" data-toggle="modal" data-target="#modal_login" class="flex-c-m trans-04 p-lr-25">
								Login
							</a>
						@endif
						@endauth

					</div>
					
					{{-- <span class="flex-c-m trans-04 p-lr-25">Cliente: {{(auth()->user()->name) ?? 'Invitado'}}</span> --}}
				
			{{-- 	</div>
			</div>		
		{{-- 	</div> --}}
		{{-- <div class="menusecuext"> --}}
			<!-- MENU PRINCIPAL-->
			{{-- <div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop p-l-45">
					
			 --}}		<!-- Logo desktop -->		
					{{-- <a href="{{route('home')}}" class="logo">
						<img class="logo" src="{{ asset ('asset/plantillappal/imagenes/logoqmerengones.png') }}" alt="IMG-LOGO"> 
					</a> --}}

					<!-- Menu desktop -->
					{{-- <div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="http://127.0.0.1:8000/">inicio</a>								
							</li>

							<li>
								<a href="product">Catalogo</a>
							</li>

							
							<li>
								<a href="blog">Blog</a>
							</li>

							<li>
								<a href="nosotros">Acerca De Nosotros</a>
							</li>

							<li>
								<a href="contactanos">Contactanos</a>
							</li>
							
							<li>
								<a href="#">Sedes</a>
							</li>

							<li>
								<a href="{{ route('cart')}}">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
										<path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
									</svg>
									X
									{{ session()->get('contador') }}
									
								</a>
							</li>

							<li>
								<span class="flex-c-m trans-04 p-lr-25 menucolotex">Hola: {{(auth()->user()->name) ?? 'Invitado'}}</span>
							</li>
							<li>
								<a href="{{ route('logout') }}" class="flex-c-m trans-04 p-lr-25">
									salir
								</a>
							</li>
						</ul>
					</div>	

					 --}}<!-- Icon header -->
					{{-- <div class="wrap-icon-header flex-w flex-r-m h-full">							
						
							
						<div class="flex-c-m h-full p-lr-19">
							<div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
								<i class="zmdi zmdi-menu"></i>
							</div>
						</div>
					</div>
				</nav>
			</div>	
		</div> --}}

		<!-- Header Mobile -->
		{{-- <div class="wrap-header-mobile"> --}}
			<!-- Logo moblie -->		
		{{-- 	<div class="logo-mobile">
				<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div> --}}

			<!-- Icon header -->
			{{-- <div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
				<div class="flex-c-m h-full p-r-5">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="2">
						<i class="zmdi zmdi-shopping-cart"></i>
					</div>
				</div>
			</div> --}}

			<!-- Button show menu -->
			{{-- <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div> --}}


		<!-- Menu Mobile -->
		{{-- <div class="menu-mobile">
			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
					<ul class="sub-menu-m">
						<li><a href="index.php">inicio</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.html">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>
 --}}
		<!-- Modal Search -->
		{{-- <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<button class="flex-c-m btn-hide-modal-search trans-04">
				<i class="zmdi zmdi-close"></i>
			</button>

			<form class="container-search-header">
				<div class="wrap-search-header">
					<input class="plh0" type="text" name="search" placeholder="Search...">

					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
				</div>
			</form>
		</div>
	</header> --}} 


<!-- Header -->
<header class="header-v3">

	<!-- MENU SECUNDARIO -->	
	<div class="extmenus">
	<div class="top-bar">
		<div class="content-topbar flex-sb-m h-full container menucolotexdos">
			<div class="menucolotexdos left-top-bar">
				{{-- Los mas deliciosos productos a los Mejores precios !!! --}}
			</div>

			<div class="menucolotexdos right-top-bar flex-w h-full">
				<a href="#" class="menucolotexdos flex-c-m trans-04 p-lr-25">
					Help & FAQs
				</a>

				<a href="#" class="menucolotexdos flex-c-m trans-04 p-lr-25">
					My Account
				</a>
				@empty(auth()->user())
					<a href="{{ route('login') }}" class="flex-c-m trans-04 p-lr-25">
						Login
					</a>
				
					<a href="{{ route('admin.usuario') }}"class="menucolotexdos flex-c-m trans-04 p-lr-25">
						Registrate
					</a>
				@endempty		
				<a href="{{ route('logout') }}" class="flex-c-m trans-04 p-lr-25">
					salir
				</a>

				{{-- <div class="flex-c-m trans-04 p-lr-25">Cliente: {{session()->get('nombre_usuario') ?? 'Invitado'}}</div> --}}
				{{-- @if(Route::has('login'))
					<h1>siiiiiiiii</h1>
					<a href="{{ route('admin') }}" class="flex-c-m trans-04 p-lr-25">
						Administrar
					</a>
				@auth
					<a href="{{ route('login') }}" data-toggle="modal" data-target="#modal_login" class="flex-c-m trans-04 p-lr-25">
						Login
					</a>
				@endif
				@endauth --}}
				{{-- @if (auth()->user()) --}}
				{{-- <h1>siiiiii</h1> --}}
				
				<div>						
						@if(auth()->user())
						{{-- <h1>siiiiii</h1>  --}}
							@if(session()->get('rol_usuario') == 2)
								<div class="m-t-5 flex-c-m trans-04 p-lr-25">Hola Cliente: {{session()->get('nombre_usuario')}}</div>
								 
							@else
								<a href="{{ route('admin') }}" class="flex-c-m trans-04 p-lr-25">
									{{session()->get('nombre_usuario')}} - Administrar 
								</a>							
							@endif 
							
						@else		
							<div class="m-t-5 flex-c-m trans-04 p-lr-25">Cliente: Invitado</div>
						@endif						
				</div>	
				
            	
				
			</div>
		</div>
	</div>


	<!-- MENU PRINCIPAL -->
	<div class="container-menu-desktop trans-03">
		<div class="wrap-menu-desktop">
			<nav class="limiter-menu-desktop p-l-45">
				
				<!-- Logo desktop -->		
				<a href="{{route('home')}}" class="logo">
					<img class="logo" src="{{ asset ('asset/plantillappal/imagenes/logoqmerengones.png') }}" alt="IMG-LOGO"> 
				</a>

				<!-- Menu desktop -->
				<div class="menu-desktop">
					<ul class="main-menu">
						<li>
							<a href="{{route('home')}}">Inicio</a>
						</li>
						

						<li class="label1" data-label1="hot">
							<a href="{{route('catalogo')}}">Catalogo</a>
						</li>

						<li>
							<a href="{{route('blog')}}">Blog</a>
						</li>

						<li>
							<a href="{{route('nosotros')}}">Acerca De Nosotros</a>
						</li>

						<li>
							<a href="{{route('contactanos')}}">Contactanos</a>
						</li>
						<li>
							<a href="{{route('sedes')}}">Sedes</a>
						</li>
						<li>
							<a href="{{route('cart')}}" class="flex-c-m h-full p-r-25 bor6">Pagar
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
									<path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z"/>
								</svg>
							</a>
						</li>



					</ul>
				</div>	

				<!-- Icon header -->
				<div class="wrap-icon-header flex-w flex-r-m h-full">							
					<div class="flex-c-m h-full p-r-25 bor6">
						@if(session('carrito'))	
						<div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" 
								
								data-notify="{{count((session()->get('carrito')))}}"
						>
								<i class="zmdi zmdi-shopping-cart"></i>
						</div>
						@else 
						<div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart"
							data-notify="0"
						>	
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>
						@endif
					</div>
						
					<div class="flex-c-m h-full p-lr-19">
						<div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
							<i class="zmdi zmdi-menu"></i>
						</div>
					</div>
				</div>
			</nav>
		</div>	
	</div>
	</div>

	<!-- Header Mobile -->
	<div class="wrap-header-mobile">
		<!-- Logo moblie -->		
		<div class="logo-mobile">
			<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
		</div>

		<!-- Icon header -->
		<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
			<div class="flex-c-m h-full p-r-5">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti">
					
				</div>
			</div>
		</div>
		<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
			<div class="flex-c-m h-full p-r-5">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>
			</div>
		</div>

		<!-- Button show menu -->
		<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</div>
	</div>

	<div class="botonwasaext">
		<div class="botonwasa">
			<a href="https://wa.me/+57 315 560 71 81?text=Hola en que te podemos ayudar? " target="_blank">
				<img src="{{ asset ('asset/plantillappal/imagenes/wasa.png')}}" alt="">	
			</a>

		</div>
	</div>
</header>
	
	{{-- @include('custom.modal_register')
	@include('custom.modal_login') --}}
{{-- </div>	 --}}
	