<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*$cat = new Category();
        $cat->nombre    = 'Mujer';
        $cat->slug      = 'Mujer';
        $cat->descripcion   ="Ropa de Mujer";
        $cat->save();
        return $cat;*/

        $categorias = Category::all();
        return view('admin.category.index', compact('categorias'));

    }

    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //return $request;
        //return Category::create($request->all());


        $urlimagencat = [];

        if ($request->hasfile('imagenes'))
        {
            
            //return 'siii';
            $imagenes = $request->file('imagenes');

            //dd(($imagenes));

            
            
                $nombre = time().'_'.$imagen->getClientOriginalName();
                $ruta = public_path().'/imagenes';
                $imagen->move($ruta,$nombre);
                $urlimagencat['url'] = '/imagenes/'.$nombre;
            

            return $urlimagenes;
        }

        
        //Category::create($request->all());

        images()->createOne($urlimagencat);

        return redirect()->route('admin.category.index')->with('datos','Registro Creado Corectamente');
    }

    /**
     * Display the specified resource.
     */
    public function show( $slug )
    {

         /* $cat = new Category();
        $cat->nombre = $request->nombre;
        $cat->slug = $request->slug;
        $cat->descripcion = $request->descripcion;
        $cat->save();
        
        
        return $cat; */
        //return $request;

        //return Category::create($request->all());


        if(Category::where('slug', $slug)->first()){
            return 'La Categoria Ya!, Existe';
        }
        else{
            return 'Categoria Disponible';
        }
        
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        
    
        
        $cat = Category::with('images')->findOrFail($id);
        
        //return $prod;

        foreach($cat->images as $image)
        {
            $archivo = substr( $image->url ,1);
            File::delete($archivo);
            $image->delete();
        }
        
        //return $prod;
        $cat->delete();
        //return redirect()->route('admin.category.index')->with('datos', 'Registro Eliminado Correctamente');   
        //return "Se va a eliminar el Registro ".$id;
        
        
        
    
    }
}
