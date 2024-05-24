<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Pedido;
use App\Models\Detalle;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
        
        public function index()
        {

            //return 'desde carrito index';
            return view('front.cart');
          
            
        }
    
    
    
        public function show()
        {
            $cart = Session::get('carrito');
            $total = $this->total();
            return view('front.cart', compact('cart','total'));
                       
        }

        public function cartAdd($id)
        {
            
           $product = Product::with('images','category')->where('id',$id)->firstOrFail();//original
           //return $product;
           $cart = Session::get('carrito');  //original
           //dd($cart);
            
           //$cart = [];
           //---------------SE EJECUTA CUANDO EL CARRRITO ESTA VACIO------------------// 

           if (!$cart) //original    
           {
   

               //$result  = $this->countcart($product);
               //return $result; 



               $cart= [$product->id => $this->sessionData($product)];//original    
               //return $cart;
               return $this->setSessionAndReturnResponse($cart);   //original      
   
               //$valor = session()->put('cart', $cart);
               //return $valor;
           }

            //---------------SE EJECUTA CUANDO EL CARRRITO ESTA CON EL MISMO PRODUCTO , OSEA SE ESCOJIO EL MISMO PRODUCTO------------------// 

            
            if (isset($cart[$product->id])) //original
            {
                
                
                $cart[$product->id]['quantity']++;    //original            
                return $this->setSessionAndReturnResponse($cart);    //original    
                
                
                //$valor = Session()->put('carrito', $cart);               
                //dd($valor);
                //return view('front.carrito');
              
                
            }

            //---------------SE EJECUTA CUANDO EL CARRRITO YA SE INICIALIZO Y SE ESCOJE UNO DIFERENTE------------------// 

            $cart[$product->id] = $this->sessionData($product);    //original            
            
            //return $cart[$product->id]; 
            
            return $this->setSessionAndReturnResponse($cart);    //original    
            

            
            //$cart = Session::get('carrito');  
            //dd($cart);
            //dd($cart[$product->id]);      
           
            
            


        } 

        protected function sessionData(Product $product)
        {
            return [
                'id'        => $product->id,                //original
                'name'      => $product->nombre,            //original
                'quantity'  => 1,                           //original
                'price'     => $product->precio_actual,     //original
                'image'     => $product->imgppal,           //original
                //'total'     => 0
            ];
        }


        protected function setSessionAndReturnResponse($cart)
        {
            //return $cart;

            //$resultado = $this->total($cart);
            //return $resultado;
            //return $cart;
            //$calculado = $this->total($cart); //original
            //return $this->total($cart);   //buenaaaaaaaaaa
            //$this->total($cart);
            //return $calculado['total'];
            //$total = $calculado['total'];
            //$contador = $calculado['contador'];
            //return $calculado['contador'];
            
            
            //Session::put([         //original
                //'totales' => $calculado,   //original
                //'total' => $resultado,
                //'total' => $total,
                //'contador' => $contador               
            //]); 

            //Session()->put('carttotal' , $calculado);

           /*  session::push('carrito' ,[
                'carrito' => $cart,
                'resultado' => $resultado
            ]); */
 


            Session()->put('carrito' ,$cart);  //original
            //Session()->push('carrito' ,$calculado);
            //Session()->push('carrito' ,$resultado);



            //Session()->put('carrito' ,$resultado);
            //Session()->push('carrito' ,$contador);
            //dd(session()->all());

            return redirect()->route('home')->with('status_success', 'El Usuario Se Actulizo Correctamente');//original
            
        }

        public function total()
        {
            //return 'desde total';
            //return $cart;
            //return $cart[3]['id'];
            //return $cart[$cart->id ];
            $cart = Session::get('carrito');
            //dd($cart);
            $total = 0;
            //foreach($cart as $item) //original

            foreach(session('carrito') as $id => $cart) 
            {
                //return $item[1]['id'];
                //$total += $item['price'] * $item['quantity']; //original
                $total += $cart['price'] * $cart['quantity'];
            }

            //Session()->put('totalfinal' ,$total);
            return $total;
        }











        protected function countcart($product)
        {
            
            
            //return [

                if(!Session()->has('carrito'))
                {
                    $cart = $this->sessionData($product);
                    
                    //return $cart;
                    Session()->put('countcar' ,$cart); 
                }else{
                    //$numproduct = count([$product->all()]);
                    $numproduct = count([session('carrito')]);
                    return $numproduct;
                    $cart = $this->sessionData($product);
                    Session()->put('countcar' ,$cart); 
                    
                };

            //];
        }    













        public function changeQty(Request $request, Product $product)
        {
            $cart = session()->get('carrito');
            //return $cart;
            if($request->change_to === 'down')
            {
                if(isset($cart[$product->id]))
                {
                    if($cart[$product->id]['quantity'] > 1)
                    {
                        $cart[$product->id]['quantity']--;
                        //return $this->setSessionAndReturnResponse($cart);//original
                        Session()->put('carrito' ,$cart);//inventada nueva
                        return redirect()->route('cart')->with('status_success', 'El Carrito Se Actulizo Correctamente');//inventada nueva
                        

                    }else{ 
                        
                        if($cart[$product->id]['quantity'] == 0)
                        {
                            $cart[$product->id]['quantity'] = 1;
                        }else{
                            return $this->eliminaritem($producto->id);
                        }
                    }
                }else{
                
                    if(isset($cart[$product->id]))
                    {
                        $cart[$product->id]['quantity']++;
                        //return $this->setSessionAndReturnResponse($cart);//original
                        Session()->put('carrito' ,$cart); //inventada nueva
                        return redirect()->route('cart')->with('status_success', 'El Carrito Se Actulizo Correctamente');//inventada nueva
                    }


                }
            return redirect()->route('cart')->with('status_success', 'El Usuario Se Actulizo Correctamente');//original
            }
        }
        
        
        

       
        
        public function trash()
        {
            Session::pull('carrito');
            return redirect()->route('cart')->with('status_success', 'El Usuario Se Elimino');
        }

        public function eliminarItem($id)
        {
            
            $cart = session()->get('carrito');

            //return $cart;
            $elimcart = session()->get('carttotal');
            //return $elimcart;


            if(isset($cart[$id]))
            {
                unset($cart[$id]);
                session()->put('carrito', $cart);
               
            }

            
            return redirect()->back()->with('status_success', 'Se elimino el item del carrito');
        }

        
        
        public function checkOut(Request $request)
        {
            $totalcart = $request;
            //return $request;
            //return $totalcart;
            //return view('front.checkout');
            return view('front.checkout', compact('totalcart'));
        }

        


        

        public function confirmarCarrito()
        {
           



            //return $total;
            //return 'confirmar carrito';
            $cart = session()->get('carrito');
            //return $cart;
            
            $cart = session()->all();               //original
            //$datos = session()->get('total');
            //dd($cart);                             //original
            $carttotal = $this->total();
            //return $datos['total'];
            //return $datos;
            
            $pedido = new Pedido();
            $pedido->subtotal           =   $carttotal;
            $pedido->iva                =   0;
            $pedido->total              =   $carttotal;
            $pedido->fechapedido        =   date("y-m-d h:i:s");
            $pedido->estado             =   "Nuevo";
            $pedido->user_id            =   session()->get('user_id');
            $pedido->save();    

            foreach($cart['carrito'] as $item)
            {
                
                $detalle = new Detalle();
                $detalle->precio        =   $item['price'];        
                $detalle->cantidad      =   $item['quantity'];
                $detalle->importe       =   $item['price'] * $item['quantity'];
                $detalle->product_id    =   $item['id'];
                $detalle->pedido_id     =   $pedido->id;
                $detalle->save();

            }

            $this->trash();
            //return redirect()->back()->with("success", "Listo Tu pedido Esta En Camino");

            return redirect()->route('home')->with('status_success', 'Tu compra se realizo Correctamente');



        }



}
