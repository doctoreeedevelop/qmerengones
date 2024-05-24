

@include('front/header') 




<!-- COMPRAS EN EL CARRITO  -->
<div class="bg0 p-t-75 p-b-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    {{-- {{Cart::count()}} --}}
                    {{-- {{ Cart::content()}} --}}
                    
                    
              {{--   @if(Cart::count())   --}}                  
                    
                    <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                           

                      

                           

                          

                            <tr class="table_head">

                                <th class="column-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                    </svg>
                                </th>
                                <th width="50%" class="column-2 text-center">Img</th>
                                <th class="column-3">Productos</th>
                                <th class="column-4">Precio</th>
                                <th class="column-5">Cantidad</th>
                                <th class="column-6">Total</th>
                                    
                            </tr>                     
                            {{-- {{Cart::content()}}   --}}
                            {{-- @foreach (Cart::content() as $item) --}} 

                        @php $total = 0; @endphp
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $product)
                               
                            @php $subtotal = $product['price'] * $product['quantity']; 
                                /*  $total += $subtotal;    */
                            
                            @endphp

                            
                            <tr class="table_row">
                                
                                <td class="column-1">
                                    <form action="{{ route('removeitem') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="" value="">
                                        <input type="submit" name="btn" class="btn btn-danger btn-sm" value="X">
                                    
                                    
                                    </form>           
                                </td>                                       
                                <td class="column-2">
                                    <div class="how-itemcart1 text-center">
                                        <img src="" alt="IMG">
                                    </div>
                                </td>
                                        

                                <td class="column-3">{{$product['name']}}</td>
                                <td class="column-4">${{$product['price']}}</td>
                                
                            
                                <td class="column-5">

                               
                                    <div class="m-l-140 wrap-num-product flex-w m-l-auto m-r-0 flex-col-m">
                                        
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            {{-- <a href="{{ route('decrementarcantidad', $item->rowId)}}">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </a>  --}}
                                        </div>
                                            
                                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="$product['quantity']">

                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            {{-- <a href="{{ route('incrementarcantidad', $item->rowId)}}">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </a> --}}
                                        </div>
                                    </div>
                                
                                </td>
                                <td class="column-6  txt-center ">
                                    {{$subtotal}} 

                                   {{--  <td>{{ number_format($item->qty * $item->price)}}</td> --}}
                                    
                                </td>
                                {{-- <td class="column-5">{{ $item->qty}}</td>     --}}
                                {{-- <td class="column-5">{{ $item->qty}}</td>     --}}
                               
                               {{-- <td class="column-6"> ${{$sub_total}} </td> --}}
                              
                            
                            </tr>
                            @endforeach   
                        @endif



                     
                        </table>
                        {{-- <a href="{{ route("clear") }}" class="text-center">Vaciar Carrito</a> --}}
                    </div>
                {{-- @else  --}}
                    <h3>Carrito Vacio</h3><a href="{{route('home')}}" class="btn">Volver A compras ?</a>
                {{-- @endif --}}     
               

                    <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                        <div class="flex-w flex-m m-r-20 m-tb-5">
                            <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Codigo Cupon">
                                
                            <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                ApLicar Cupon Dcto
                            </div>
                        </div>

                        <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                            <a href="{{route("clear")}}">Vaciar Carrito</a>
                       </div>
                    </div>  
                </div>
            </div>

            <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class="mtext-109 cl2 p-b-30">
                        Totales del Carrito
                    </h4>

                    <div class="flex-w flex-t bor12 p-b-13">
                        <div class="size-208">
                            <span class="stext-110 cl2">
                                Subtotal: 
                            </span>
                        </div>

                        <div class="size-209">
                            <span class="mtext-110 cl2">                                
                              $ {{$total}}
                            </span>
                        </div>
                    </div>

                    <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                        <div class="size-208 w-full-ssm">
                            <span class="stext-110 cl2">
                                Recuerda .!!
                            </span>
                        </div>

                        <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                            <p class="stext-111 cl6 p-t-2">
                                {{-- There are no shipping methods available. Please double check your address, or contact us if you need any help. --}}

                               Que para Hacer el pago Debes estar registrado en la pagina Muchas Gracias...
                            </p>
                            
                            <div class="p-t-15">
                                <span class="stext-112 cl8">
                                    Calculo Total Compra 
                                </span>

                               {{--  <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                    <select class="js-select2" name="time">
                                        <option>Select a country...</option>
                                        <option>USA</option>
                                        <option>UK</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div> --}}

                                {{-- <div class="bor8 bg0 m-b-12">
                                    <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state" placeholder="State /  country">
                                </div>

                                <div class="bor8 bg0 m-b-22">
                                    <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="postcode" placeholder="Postcode / Zip">
                                </div>
                                
                                <div class="flex-w">
                                    <div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
                                        Update Totals
                                    </div>
                                </div> --}}
                                    
                            </div>
                        </div>
                    </div>

                    <div class="flex-w flex-t p-t-27 p-b-33">
                        <div class="size-208">
                            <span class="mtext-101 cl2">
                               Total: 
                            </span>
                        </div>

                        <div class="size-209 p-t-1">
                            <span class="mtext-110 cl2">                             
                                {{Cart::total()}} 
                            </span>
                        </div>
                    </div>
                    {{-- {{Cart::content()}} --}}
                    {{-- @auth --}}

                    <a href="{{ route('checkout')}}" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        Procede a Factura
                    </a>
                    {{-- <a href="{{ route('confirmarcarrito')}}" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        Procede a Factura
                    </a> --}}
                    {{-- @else --}}
                   {{--  <a href="{{ route('login')}}" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        Procede a Factura
                    </a> --}}
                    {{-- @endauth --}}
                </div>
            </div>
        </div>
    </div>
</div>
    

<!-- Footer -->
@include('front/footer') 

