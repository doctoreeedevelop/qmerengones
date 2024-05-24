<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Pedido;
use App\Models\Detalle;
use Illuminate\Support\Facades\Session;

class CarritoController extends Controller
{
        
        public function index()
        {

            return 'desde carrito index';
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
            
           $product = Product::with('images','category')->where('id',$id)->firstOrFail();
           //return $product;
           $cart = Session::get('carrito');  
           //dd($cart);
           //---------------SE EJECUTA CUANDO EL CARRRITO ESTA VACIO------------------// 

           if (!$cart) 
           {
   
               $cart= [$product->id => $this->sessionData($product)];
               //return $cart;
               return $this->setSessionAndReturnResponse($cart);     
               
               
               //$calculado = $this->total();
               //return $calculado;  
               //$valor = session()->put('cart', $cart);
               //return $valor;
           }

            //---------------SE EJECUTA CUANDO EL CARRRITO ESTA CON EL MISMO PRODUCTO , OSEA SE ESCOJIO EL MISMO PRODUCTO------------------// 

            
            if (isset($cart[$product->id]))
            {
                
                $cart[$product->id]['quantity']++;
                return $this->setSessionAndReturnResponse($cart);    
                
                
                //$valor = Session()->put('carrito', $cart);               
                //dd($valor);
                //return view('front.carrito');
              
                
            }

            //---------------SE EJECUTA CUANDO EL CARRRITO YA SE INICIALIZO Y SE ESCOJE UNO DIFERENTE------------------// 

            $cart[$product->id] = $this->sessionData($product);
            return $this->setSessionAndReturnResponse($cart);    
            

            
            //$cart = Session::get('carrito');  
            //dd($cart);
            //dd($cart[$product->id]);      
           
            
            


        } 

        protected function sessionData(Product $product)
        {
            return [
                'id'        => $product->id,
                'name'      => $product->nombre,
                'quantity'  => 1,
                'price'     => $product->precio_actual,
                'image'     => $product->imgppal,
                'total'     => 0
            ];
        }

        protected function setSessionAndReturnResponse($cart)
        {
            Session()->put('carrito', $cart);
            
            //$calculado = $this->total();
            //return $calculado;
            //Session::push('carrito', $calculado);
            //$resultado = Session()->push('carrito', $calculado);
            //dd($resultado);
            //var_dump($resultado);
            //return $resultado;
            //dd(Session::get('carrito'));

            //$cart= [$product->id => $this->sessionData($product)];
            //return $cart;

            return redirect()->route('cart')->with('status_success', 'El Usuario Se Actulizo Correctamente');
            //return view('front.cart', compact('calculado'));
        }

        
        
        
        public function total()
        {
            //return 'desde total';
            $cart = Session::get('carrito');
            //return $cart;
            $total = 0;
            foreach($cart as $item)
            {
                //return $item['price'];
                $total += $item['price'] * $item['quantity'];
                //return $total;
            }

            
            Session::put('carrito', $total);
            //dd(Session::get('carrito'));
            
            $cartx = Session::get('carrito');
            return $cartx;
            
            //var_dump(Session::push('carrito', $total));
            
            //$resultado = Session::push('carrito', $total);
            //dd($resultado);
            //return $resultado;

            return $total;
        }

        public function changeQty(Request $request, Product $product)
        {
            $cart = session()->get('carrito');
            if($request->change_to === 'down')
            {
                if(isset($cart[$product->id]))
                {
                    if($cart[$product->id]['quantity'] > 1)
                    {
                        $cart[$product->id]['quantity']--;
                        return $this->setSessionAndReturnResponse($cart);
                    }else{
                        return $this->eliminaritem($producto->id);
                    }
                }
            }else{
                
                if(isset($cart[$product->id]))
                {
                    $cart[$product->id]['quantity']++;
                    return $this->setSessionAndReturnResponse($cart);
                }


            }
            return back();
        }
        

       
        
        public function trash(Request $request)
        {
            Session::flush('carrito');
            return redirect()->route('cart')->with('status_success', 'El Usuario Se Elimino');
        }

        public function eliminarItem($id)
        {
            
            $cart = session()->get('carrito');

            if(isset($cart[$id]))
            {
                unset($cart[$id]);
                session()->put('carrito', $cart);
            }

            
            return redirect()->back()->with('status_success', 'Se elimino el item del carrito');
        }

        


        

        public function confirmarCarrito()
        {
            $pedido = new Pedido();
            $pedido->subtotal           =   Cart::subtotal();
            $pedido->iva                =   Cart::tax();
            $pedido->total              =   Cart::total();
            $pedido->fechapedido        =   date("y-m-d h:m:s");
            $pedido->estado             =   "Nuevo";
            $pedido->user_id            =   auth()->user()->id;
            $pedido->save();    

            foreach(Cart::content() as $item)
            {
                
                $detalle = new Detalle();
                $detalle->precio        =   $item->price;        
                $detalle->cantidad      =   $item->qty;
                $detalle->importe       =   $item->price * $item->qty;
                $detalle->product_id    =   $item->id;
                $detalle->pedido_id     =   $pedido->id;
                $detalle->save();

            }

           //Cart::destroy();
            //return redirect()->back()->with("success", "Listo Tu pedido Esta En Camino");

            return redirect()->route('home')->with('status_success', 'El Usuario Se Actulizo Correctamente');

        }



}
