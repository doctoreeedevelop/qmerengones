<?php

namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Validate;
use validator;
use Illuminate\Auth\Events; //este es para validar me lo encontre buscando
use Illuminate\Support\Facades\File;


class AdminProductController extends Controller
{
    /* public function __construct()
    {
        $this->middleware('auth');
    }
     */
    
    public function index(Request $request)
    {
        $nombre = $request->get('nombre');



        //$productos = Product::where('nombre', 'like', "%$nombre%")->orderBy('nombre')->paginate(10);
        $productos = Product::with('images','category')->where('nombre', 'like', "%$nombre%")->orderBy('nombre')->paginate(10);
        
        //return $productos;
        return view('admin.product.index', compact('productos'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Category::all();
        //return $categorias;
        return view('admin.product.create', compact('categorias'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
                
                'nombre'    => 'required|max:50|unique:products,nombre',
                'slug'      => 'required|max:50|unique:products,slug', 
                'imagenes.*'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //return $request;

        
        $urlimagenes = [];
        
        //IMAGEN SECUNDARIAS 4 VARIAS

        if ($request->hasfile('imagenes'))
        {

            //return 'siii';
            $imagenes = $request->file('imagenes');

            //dd(($imagenes));

            foreach($imagenes as $imagen)
            {
                $nombre = time().'_'.$imagen->getClientOriginalName();
                $ruta = public_path().'/imagenes';
                $imagen->move($ruta,$nombre);
                $urlimagenes[]['url'] = '/imagenes/'.$nombre;
            }

            //return $urlimagenes;
        }


        //return $request->all();
        
        $prod = new Product;

        
        $prod->nombre                       =   $request->nombre;
        $prod->slug                         =   $request->slug;
        $prod->category_id                  =   $request->category_id;
        $prod->cantidad                     =   $request->cantidad;
        $prod->precio_anterior              =   $request->precioanterior;
        $prod->precio_actual                =   $request->precioactual;
        $prod->porcentaje_descuento         =   $request->porcentajededescuento;
        $prod->descripcion_corta            =   $request->descripcion_corta;
        $prod->descripcion_larga            =   $request->descripcion_larga;
        $prod->especificaciones             =   $request->especificaciones;
        $prod->datos_de_interes             =   $request->datos_de_interes;
        $prod->estado                       =   $request->estado;
        $prod->activo                       =   $request->activo;
        $prod->sliderprincipal              =   $request->sliderprincipal;
        $prod->masvendidos                  =   $request->masvendidos;
        $prod->promociones                  =   $request->promociones;

        
        if($request->activo)
        {
            $prod->activo = 'si';
        }else{
            $prod->activo = 'no';
        }

        if($request->sliderprincipal)
        {
            $prod->sliderprincipal = 'si';
        }else{
            $prod->sliderprincipal = 'no';
        }

        if($request->masvendidos)
        {
            $prod->masvendidos = 'si';
        }else{
            $prod->masvendidos = 'no';
        }

        if($request->promociones)
        {
            $prod->promociones = 'si';
        }else{
            $prod->promociones = 'no';
        }

        $prod->save();

        
        $prod->images()->createMany($urlimagenes);
        

        //return $prod->images;

        return redirect()->back()->with('successes', "Se Guardo Correctamente el producto");


        
        //return $prod;
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $producto = Product::with('images','category')->where('slug', $slug)->firstOrFail();
        $categorias= Category::orderBy('name')->get();
        //$estados_productos = $this->estados_productos();

        //dd($estados_productos);
        
        $editar = 'si';
        //return $producto;
        return view('admin.product.edit', compact('producto','categorias','editar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
                
            'nombre'    => 'required|max:50|unique:products,nombre,'.$id,
            'slug'      => 'required|max:50|unique:products,slug,'.$id,
            'imagenes.*'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        
        ]);

        //return $request;

        
        $urlimagenes = [];
        
        //IMAGEN SECUNDARIAS 4 VARIAS

        if ($request->hasfile('imagenes'))
        {

            //return 'siii';
            $imagenes = $request->file('imagenes');

            //dd(($imagenes));

            foreach($imagenes as $imagen)
            {
                $nombre = time().'_'.$imagen->getClientOriginalName();
                $ruta = public_path().'/imagenes';
                $imagen->move($ruta,$nombre);
                $urlimagenes[]['url'] = '/imagenes/'.$nombre;
            }

            //return $urlimagenes;
        }


        //return $request->all();
        
        $prod = Product::findOrFail($id);

        
        $prod->nombre                       =   $request->nombre;
        $prod->slug                         =   $request->slug;
        $prod->category_id                  =   $request->category_id;
        $prod->cantidad                     =   $request->cantidad;
        $prod->precio_anterior              =   $request->precioanterior;
        $prod->precio_actual                =   $request->precioactual;
        $prod->porcentaje_descuento         =   $request->porcentajededescuento;
        $prod->descripcion_corta            =   $request->descripcion_corta;
        $prod->descripcion_larga            =   $request->descripcion_larga;
        $prod->especificaciones             =   $request->especificaciones;
        $prod->datos_de_interes             =   $request->datos_de_interes;
        $prod->estado                       =   $request->estado;
        $prod->activo                       =   $request->activo;
        $prod->sliderprincipal              =   $request->sliderprincipal;
        $prod->masvendidos                  =   $request->masvendidos;
        $prod->promociones                  =   $request->promociones;

        
        if($request->activo)
        {
            $prod->activo = 'si';
        }else{
            $prod->activo = 'no';
        }

        if($request->sliderprincipal)
        {
            $prod->sliderprincipal = 'si';
        }else{
            $prod->sliderprincipal = 'no';
        }

        if($request->masvendidos)
        {
            $prod->masvendidos = 'si';
        }else{
            $prod->masvendidos = 'no';
        }

        if($request->promociones)
        {
            $prod->promociones = 'si';
        }else{
            $prod->promociones = 'no';
        }

        $prod->save();

        
        $prod->images()->createMany($urlimagenes);
        

        //return $prod->images;

        return redirect()->route('admin.product.index', $prod->slug)->with('successes', "Se Edito Correctamente El Producto");


    }

    /**
     * Remove the specified resource from storage.
     */
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
        return redirect()->route('admin.product.index')->with('datos', 'Registro Eliminado Correctamente');   
        
        
        
        
        
    }

    public function estados_productos(){


        return [
            '',
            'Nuevo',
            'En Oferta',
            'Popular'
        ];
    }
}
