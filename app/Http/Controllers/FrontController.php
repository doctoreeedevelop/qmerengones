<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class FrontController extends Controller
{

    public function home()
    {
        //dd(auth()->user());
        //dd(session()->all());
        //dd(session()->get('carrito'));
        //dd(count((session()->get('carrito'))));
        //dd(session()->get('totalfinal'));
        //dd(auth()->user()->unreadNotifications);
        
        //$categorias = Category::all();
        //dd(session()->get('contador'));
        //dd(session()->get(['total' => 'contador']));
        //dd(session(['total' => 'contador']));
        //dd(session('total'));
        //{{ session::get('carrito') }};
        //dd(session()->name);
        //dd(auth()->user()->name);
        //dd(auth()->user());
        $categorias = Category::with('images')->get();
        $masvendidos = $productos = Product::with('images','category')->where('masvendidos', 'si')->get();
        $promociones = $productos = Product::with('images','category')->where('promociones', 'si')->get();
        //return $masvendidos; 
        //return $promociones; 

        //return $categorias;
        return view('front.plantillappal', compact('categorias','masvendidos','promociones'));
    }


    public function catalogo()
    {
        //$cat = Category::find(1)->products;
        //return $cat;
        //$categorias = Category::all();
        //return $categorias;
        $productos = Product::all();

        //return $productos;
        return view('front.catalogo', compact('productos'));
    }

    public function blog()
    {
        return view('front.blog');
    }

    public function acerca_de_nosotros()
    {
        return view('front.nosotros');
    }

    public function contactanos()
    {
        return view('front.contactanos');
    }

    public function sedes()
    {
        return view('front.sedes');
    }

    public function categoria($id)
    {
        //$cat =  Category::find($id);
        //$productos = Product::find($id)->where('id', $id)->with('images')->get();

        $productos = Category::find($id)->products()->with('images')->get();

        //$productos = Category::find($id)->where('id', $id)->with('images')->get();

        //$productos = Product::with('images','category')->find($id)->get();
        //$productos = Product::with('images','category');
        //return $cat;
        //return $productos[3]->images[0]->url;
        
        
        //return $productos[1]->images[1]->url;
        //return $productos;
        return view('front.categoria', compact('productos'));
    }

    public function detalle($id)
    {
        
        //$productos = Product::with('images')->find($id);
        //$productos = Category::find($id)->products($id)->with('images')->get();

        $productos = Product::find($id)->where('id', $id)->with('images')->get();

        //return $productos[0]->nombre;
        //return $productos[2]->images;
        //return $productos[0]->images;
        //$productos = Product::with('images','category')->where('nombre', 'like', "%$nombre%")->orderBy('nombre')->paginate(10);
        
        return view('front.detalle', compact('productos'));
    }
}
