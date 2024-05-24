 
@include('front/header') 
{{-- <div class="btn-back-to-top" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="zmdi zmdi-chevron-up"></i>
    </span>
</div> --}}

<!-- MINI CARRITO LATERAL -->
@include('includes/minicarrito') 
<!-- FIN MINI CARRITO LATERAL FIN-->




<!-- Modal1 -->
<section class="extdetalle">

   {{-- {{ $productos[0]->images->count() }} --}}
{{-- <div class="wrap-modal1 js-modal1 p-t-60 p-b-20"> --}}
    <div id="modaldetalle" class="overlay-modal1 jjs-hide-modal1"></div>

    <div class="detalleext container">
        {{-- <div class="bg0 p-t-60 p-b-30  how-pos3-parent"> --}}
            <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                {{-- <img src="images/icons/icon-close.png" alt="CLOSE"> --}}
            </button>

            <div class="row">
                <div class="col-md-7">
                <div class="detaext col-md-12 col-lg-12 p-b-30 m-t-50">
                    <div class="detaextuno p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                           
                           
                            @if($productos[0]->porcentaje_descuento > 0)
                                <div class="promodos labelpromodos" data-labelpromodos="{{$productos[0]->porcentaje_descuento}}">
                                    <div class="promointdos">
                                        {{$productos[0]->porcentaje_descuento}}% 
                                    </div>
                                </div>
                            @endif 
                            
                            
                            
                            <div class="slick3 gallery-lb">
                                {{-- {{$productos[0]}} --}}

                                

                               
                               

                                @if ( $productos[0]->images->count()<=0) 
                                    
                                    <div class="item-slick3" data-thumb="{{ asset ('asset/plantillappal/imagenes/sinimagen.jpg')}}">
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="{{ asset ('asset/plantillappal/imagenes/sinimagen.jpg')}}" alt="">

                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset ('asset/plantillappal/imagenes/sinimagen.jpg')  }}">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>


                                @else
                                @foreach ($productos[0]->images as $product)

                                                              
                                    <div class="item-slick3"  data-thumb="{{ $product->url }}">
                                        <div class="wrap-pic-w pos-relative">
                                            <img style="height: 500px; width: 400px;" src="{{ $product->url }}" alt="IMG-PRODUCT">

                                            <a class=" flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ $product->url }}">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>

                                {{-- {{$product->url}} --}}

                                @endforeach
                                @endif


                              


                              {{--   <div class="item-slick3" data-thumb="{{$productos->img2}}">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="{{$productos->img2}}" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{$productos->img2}}">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="item-slick3" data-thumb="{{$productos->img3}}">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="{{$productos->img3}}" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{$productos->img3}}">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
                <div class="col-md-4 col-lg-4 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mt-10 mtext-105 cl2 js-name-detail p-b-14">
                            {{$productos[0]->nombre}}  
                             {{-- {{$productos}} --}}
                       </h4>

                        <span>Antes</span>
                        <span class="preanterior mtext-106 cl2">
                            $ {{ $productos[0]->precio_anterior }}
                        </span>
                            </br>
                        <span>Ahora</span>   
                        <span class="mtext-106 cl2">
                             $ {{ $productos[0]->precio_actual }}
                        </span>
 
                         <p class="stext-102 cl3 p-t-23">
                             {{ $productos[0]->descripcion_corta }}
                         </p>
                        
                        
                        <div class="p-t-33">
                           {{--  <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>

                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="time">
                                            <option>Choose an option</option>
                                            <option>Size S</option>
                                            <option>Size M</option>
                                            <option>Size L</option>
                                            <option>Size XL</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>

                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="time">
                                            <option>Choose an option</option>
                                            <option>Red</option>
                                            <option>Blue</option>
                                            <option>White</option>
                                            <option>Grey</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-204 flex-w flex-m respon6-next">
                                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>

                                    <a href="{{route('cartadd', $productos[0]->id)}}" class="botonuno m-l--15 stext-101 bg13 cl0 trans-04 text-center"
                                        {{-- v-on:click="agregoalcart({{$masvendido->id}})"   --}}
                                        >
                                        Lo Quiero
                                    </a> 

                                    
                                    
                                    {{-- <form action="{{route('cartadd', $productos[0]->id)}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$productos[0]->id}}">
                                        <input type="submit" class="flex-c-m stext-101 cl0 size-101 bg13 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" value="Agregar al carrito">
                                        <button class="botonuno stext-101 bg13 cl0 trans-04">Lo Quiero</button>
                                    </form> --}}





                                </div>
                            </div>	
                        </div>

                        <!--  -->
                        <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                            <div class="flex-m bor9 p-r-10 m-r-11">
                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                                    <i class="zmdi zmdi-favorite"></i>
                                </a>
                            </div>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
       {{--  </div>
 --}}    </div>
    <div class="detasecdosext bor10 m-t-50 p-t-43 p-b-40">
        <!-- Tab01 -->
        <div class="tab01">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item p-b-10">
                    <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Descripcion</a>
                </li>

                <li class="nav-item p-b-10">
                    <a class="nav-link" data-toggle="tab" href="#information" role="tab">informacion Adicional</a>
                </li>

                <li class="nav-item p-b-10">
                    <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Calificacion (1)</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content p-t-43">
                <!-- - -->
                <div class="tab-pane fade show active" id="description" role="tabpanel">
                    <div class="how-pos2 p-lr-15-md">
                        <p class="detacolotex stext-102 cl6">
                            {{ $productos[0]->descripcion_larga }}  
                        </p>
                    </div>
                </div>

                <!-- - -->
                
                <div class="tab-pane fade" id="information" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                            <ul class="p-lr-28 p-lr-15-sm">
                                <li class="flex-w flex-t p-b-7">
                                    <span class="stext-102 cl3 size-205">
                                        Peso
                                    </span>

                                    <span class="detacolotex stext-102 cl6 size-206">
                                        0.79 kg
                                    </span>
                                </li>

                                <li class="flex-w flex-t p-b-7">
                                    <span class="stext-102 cl3 size-205">
                                        Dimensiones Vaso
                                    </span>

                                    <span class="detacolotex stext-102 cl6 size-206">
                                        110 x 33 x 100 cm
                                    </span>
                                </li>

                                <li class="flex-w flex-t p-b-7">
                                    <span class="stext-102 cl3 size-205">
                                        Insumos
                                    </span>

                                    <span class="detacolotex stext-102 cl6 size-206">
                                        100% Naturales
                                    </span>
                                </li>

                                <li class="flex-w flex-t p-b-7">
                                    <span class="stext-102 cl3 size-205">
                                        Sabores
                                    </span>

                                    <span class="detacolotex stext-102 cl6 size-206">
                                        Chicle, Arequipe, Vainilla
                                    </span>
                                </li>

                                <li class="flex-w flex-t p-b-7">
                                    <span class="stext-102 cl3 size-205">
                                        Frutas
                                    </span>

                                    <span class="detacolotex stext-102 cl6 size-206">
                                        Manzana, Mango, Fresa, Durazno
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- - -->
                <div class="tab-pane fade" id="reviews" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                            <div class="p-b-30 m-lr-15-sm">
                                <!-- Review -->
                                <div class="flex-w flex-t p-b-68">
                                    <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                        <img src="images/avatar-01.jpg" alt="AVATAR">
                                    </div>

                                    <div class="size-207">
                                        <div class="flex-w flex-sb-m p-b-17">
                                            <span class="mtext-107 cl2 p-r-20">
                                                Ariana Grande
                                            </span>

                                            <span class="fs-18 cl11">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </span>
                                        </div>

                                        <p class="detacolotex stext-102 cl6">
                                            Envianos los comentarios de este producto o que te gustaria saber?                                        </p>
                                    </div>
                                </div>
                                
                                <!-- Add review -->
                                <form class="w-full">
                                    <h5 class="mtext-108 cl2 p-b-7">
                                        Agrega una Reseña
                                    </h5>

                                    <p class="detacolotex stext-102 cl6">
                                        Su dirección de correo electrónico no será publicada. Se mantendra la reserva de los Datos *
                                    </p>

                                    <div class="flex-w flex-m p-t-50 p-b-23">
                                        <span class="stext-102 cl3 m-r-16">
                                            Calificación
                                        </span>

                                        <span class="wrap-rating fs-18 cl11 pointer">
                                            <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                            <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                            <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                            <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                            <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                            <input class="dis-none" type="number" name="rating">
                                        </span>
                                    </div>

                                    <div class="row p-b-25">
                                        <div class="col-12 p-b-5">
                                            <label class="stext-102 cl3" for="review">Descripción O Comentario</label>
                                            <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
                                        </div>

                                        <div class="col-sm-6 p-b-5">
                                            <label class="stext-102 cl3" for="name">Nombre</label>
                                            <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name">
                                        </div>

                                        <div class="col-sm-6 p-b-5">
                                            <label class="stext-102 cl3" for="email">Email</label>
                                            <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text" name="email">
                                        </div>
                                    </div>

                                    <button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
                                        Enviar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- </div>  --}}

</section>    

@include('front/footer') 

