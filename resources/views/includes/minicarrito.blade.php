<div class="wrap-header-cart js-panel-cart">
	<div class="s-full js-hide-cart"></div>

	<div class="header-cart flex-col-l p-l-60 p-r-25">
		<div class="m-t-110 header-cart-title flex-w flex-sb-m p-b-8">
			<span class="m-t-30 mtext-103 cl2">
				Mini-Carrito
			</span>

			<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
				<i class="zmdi zmdi-close"></i>
			</div>
		</div>
		  
		<div class="header-cart-content flex-w js-pscroll">
			
			@php $total = 0; @endphp      
			
			@if(session('carrito'))
			
			<ul class="header-cart-wrapitem w-full">
				
				@foreach (session('carrito') as $id => $product) 
					@php  	number_format($subtotal = $product['price'] * $product['quantity']);
						number_format($total += $subtotal);    
		  
	  				@endphp       



				<li class="header-cart-item flex-w flex-t m-b-12">
					<div class="header-cart-item-img">
						@if($product['image'])
							<img style="height: 80px; width: 80px;" src="{{$product['image']}}" alt="IMG">
						@else
							<img style="height: 90px; width: 90px;" src="{{ asset ('asset/plantillappal/imagenes/sinimagen.jpg')}}" alt="IMG">
						@endif  
					</div>

					<div class="header-cart-item-txt p-t-8">
						<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							{{$product['name']}}
						</a>

						<span class="header-cart-item-info">
							{{$product['quantity']}}  X- ${{$product['price']}} - ${{$subtotal}}
						</span>
					</div>
				</li>
				@endforeach   
                                    

			</ul>
			@else 
				<h3>Carrito Vacio</h3><a href="{{route('home')}}" class="btn">Ir A compras?</a>
			@endif   
			
			<div class="w-full">
				
				
                                
				




				<div class="header-cart-total w-full p-tb-40">
					Total: ${{$total}}
				</div>

				<div class="header-cart-buttons flex-w w-full">
					<a href="{{route('cart')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
						Carrito
					</a>
					@if(session()->get('carrito'))	
						<a href="{{route('checkout')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Pagar
						</a>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>