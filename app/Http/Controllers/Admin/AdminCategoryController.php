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





class AdminCategoryController extends Controller
{
    
    public function index()
    {
       //$categorias = Category::all();

       $categorias = Category::with('images')->get();
        
       $page = "apicategori.js";
       return view('admin.category.index', compact('categorias', 'page'));
       
       /*$productos = Porduct::all();
       return view("admin.category.index", compact("productos"));
       */
    }

    
    public function create()
    {
        $page = "apicategori.js";
        return view('admin.category.create', compact('page'));
    
        
    
    }

    
    public function store(Request $request)
    {

        $request->validate([

                'name' => 'required|max:50|unique:categories,name',
                'slug' => 'required|max:50|unique:categories,slug',
                
        ]);    




        $urlimagenes = [];
        //return $request;
        //return Category::create($request->all());

        /* $request->validate([
            'nombre' => 'required│max:2│unique:categories,name',
            'slug' => 'required│max:2│unique:categories,slug',
            'description'=> 'max:2'
        ]);
        */
       

        if ($request->hasfile('imagenes'))
        {

            //return 'siii';
            $imagenes = $request->file('imagenes');

            //dd(($imagenes));

            //return $imagen->getClientOriginalName();

            foreach($imagenes as $imagen)
            {

                //return $imagen->getClientOriginalName();
                $nombre = time().'_'.$imagen->getClientOriginalName();
                $ruta = public_path().'/imagenes';
                $imagen->move($ruta,$nombre);
                $urlimagenes[]['url'] = '/imagenes/'.$nombre;
            }

            //return $urlimagenes;
        }


        $cat = new Category();
        $cat->name   = $request->name;
        $cat->slug   = $request->slug;
        $cat->description   = $request->description;
        $cat->save();

        $cat->image()->createMany($urlimagenes);

      

        /*$urlimagencat = [];

        if ($request->hasfile('imagenes'))
        {
            
            //return 'siii';
            $imagen = $request->file('imagenes');

            //dd(($imagen));

            return $imagen->OriginalName();
            
                $nombre = time().'_'.$imagen->getClientOriginalName();
                $ruta = public_path().'/imagenes';
                $imagen->move($ruta,$nombre);
                $urlimagencat['url'] = '/imagenes/'.$nombre;
            

            return $urlimagenes;
        }*/

        
        //Category::create($request->all());

        //images()->createOne($urlimagencat);

        return redirect()->route('admin.category.index')->with('datos','Registro Creado Corectamente');
    }

   
    public function show(string $id)
    {
        //
    }

   
    public function edit($slug)
    {
        $cat = Category::with('images')->where('slug', $slug)->firstOrFail();
        //return $cat;
        
        //$cat = category::where('slug', $slug)->firstOrFail();
        //return $cat;
        
        $editar = 'si';

        return view('admin.category.edit', compact('cat','editar'));
    
    }

    
    public function update(Request $request, $id)
    {
        
        $cat = Category::findOrFail($id);
        
        $request->validate([
            
            'name' => 'required|max:50|unique:categories,name,'.$cat->id,
            'slug' => 'required|max:50|unique:categories,slug,'.$cat->id,
            
        ]);  
        
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
        

        $cat->name                         =   $request->name;
        $cat->slug                         =   $request->slug;
        $cat->description                  =   $request->description;
        
        $cat->save();

        
        $cat->images()->createMany($urlimagenes);
        
        
        
        
        //$cat->fill($request->all())->save();
        //return $request;
        //return $cat;
        return redirect()->route('admin.category.index')->with('datos','Registro Creado Corectamente');
    
    }

   
    public function destroy($id)
    {
        //
    }
}
