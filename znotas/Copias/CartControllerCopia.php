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
            
           $product = Product::with('images','category')->where('id',$id)->firstOrFail();
           //return $product;
           $cart = Session::get('carrito');  
           //dd($cart);
            
           
           //---------------SE EJECUTA CUANDO EL CARRRITO ESTA VACIO------------------// 

           if (!$cart) 
           {
   
               $cart= [$product->id => $this->sessionData($product)];
               return $this->setSessionAndReturnResponse($cart);     
   
               //return $cart;
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
                'image'     => $product->imgppal
            ];
        }

        protected function setSessionAndReturnResponse($cart)
        {
            //return $cart;

            //$this->total($cart);
            
            $calculado = $this->total($cart);
            //return $calculado['total'];
            $total = $calculado['total'];
            $contador = $calculado['contador'];
            //return $calculado['contador'];
            
            
           /*  Session::put([
                    
                'total' => $total,
                'contador' => $contador
                
                
            ]); */


            Session()->put('carrito' ,$cart);
            Session()->push('carrito' ,$total);
            //Session()->push('carrito' ,$contador);
            //dd(session()->all());

            return redirect()->route('cart')->with('status_success', 'El Usuario Se Actulizo Correctamente');
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
                        return this->eliminaritem($producto->id);
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
        
        
        
        public function total($cart)
        {
            //return 'desde total';
            //return $cart;
            //return $cart[3]['id'];
            //return $cart[$cart->id ];
            //$cart = Session::get('carrito');
            $contador =0;
            $total = 0;
            foreach($cart as $item)
            {
                //return $item[1]['id'];
                $total += $item['price'] * $item['quantity'];
                $contador = $contador + 1; 
            }
            return $datos = ["total" => $total, "contador" => $contador ];
        }

       
        
        public function trash()
        {
            Session::pull('carrito');
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
            //return 'confirmar carrito';
            //$cart = session()->get('carrito');
            $cart = session()->all();
            //$datos = session()->get('total');
            
            return $cart;
            //return $datos['total'];
            //return $datos;
            
            $pedido = new Pedido();
            $pedido->subtotal           =   $cart['total'];
            $pedido->iva                =   0;
            $pedido->total              =   $cart['total'];
            $pedido->fechapedido        =   date("y-m-d h:i:s");
            $pedido->estado             =   "Nuevo";
            $pedido->user_id            =   session()->get('id');
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
