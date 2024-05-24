<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        /*$cat = new Product();
        $cat->nombre    = 'Mujer';
        $cat->slug      = 'Mujer';
        $cat->descripcion   ="Ropa de Mujer";
        $cat->save();
        return $cat;*/

        //$categorias = Product::all();
        return Product::all();
        //return view('admin.Product.index', compact('categorias'));

    }

    public function show( $slug )
    {

         /* $cat = new Product();
        $cat->nombre = $request->nombre;
        $cat->slug = $request->slug;
        $cat->descripcion = $request->descripcion;
        $cat->save();
        
        
        return $cat; */
        //return $request;

        //return Product::create($request->all());


        if(Product::where('slug', $slug)->first()){
            return 'Producto Ya!, Existe';
        }
        else{
            return 'Producto Disponible';
        }
        
    }


    public function eliminarimagen($id)
    {
        
        //return "Se va a eliminar el Registro ".$id;
        $image = Image::find($id);
        //return $image;
        
        $archivo = $image->url;
        //return $archivo;

        $archivo = substr($image->url,1);
        //return $archivo;
        
        $eliminar = File::delete($archivo);
        
        //return $eliminar;

        $image->delete();
        return "eliminado id:".$id.' '.$eliminar;
        
    }

    public function eliminarprod($id)
    {
        //$producto = Product::findOrFail($id);
        $producto = Product::with('images','category')->where('id', $id)->firstOrFail();
        //return $producto;

       
        //return $producto;
        

        //$eliimgprod = $producto->images[0]->url;
        //return $eliimgprod;
        $producto->delete();
        return "Se va a eliminar el Registro ".$id;
    }

    public function destroy(string $id)
    {
        
        $prod = Product::with('images')->findOrFail($id);
        
        //return $prod;

        foreach($prod->images as $image)
        {
            $archivo = substr( $image->url ,1);
            File::delete($archivo);
            $image->delete();
        }
        
        //return $prod;
        $prod->delete();
        //return redirect()->route('admin.product.index')->with('datos', 'Registro Eliminado Correctamente');   
        return "Se va a eliminar el Registro ".$id;
        
        
        
    }




}
