<?php



//00 saber si un usuario o prosucto tiene una imagen
 
    $usuario = App\Models\User::find(1);
    
    $image = $usuario->image;
    
    //return $usuario->image;

    if($image)
    {
        echo 'Tiene una imagen'; 
    }else{
        echo 'No tiene una imagen'; 
    }
    return $image;



//01 crear una imagen para un usuario utilizando el metodo save
    
    $imagen = new App\Models\Image(['url' => 'imagenes/avatar.png']);
        
    $usuario = App\Models\User::find(1);
    
    $usuario->image()->save($imagen);
    
    return $usuario;



//02 obtener las informaciones de las imagenes atraves de los usuarios

    $usuario = App\Models\User::find(1);
    
    return $usuario->image->url;



//03 crear varias Imagenes para un producto utilizando el metodo savemany
  
    $producto = App\Models\Product::find(2);
    
    $producto->images()->saveMany([
    new App\Models\Image(['url' => 'imagenes/avatar.png']),
    new App\Models\Image(['url' => 'imagenes/avatar2.png']),
    new App\Models\Image(['url' => 'imagenes/avatar3.png'])
    ]);

    return $producto->images;



//04 crear una imagen para un usuario utilizando el metodo create
    
    $imagen = new App\Models\Image(['url' => 'imagenes/avatar.png']);
        
    $usuario = App\Models\User::find(1);

    $usuario->image()->create([
    'url' => 'imagenes/avatar2.png',
    ]);

    return $usuario;



//04 ojo otra forma otra forma seria asi
    
    $imagen = [];

    $imagen['url'] = 'imagenes/avatar3.png'; 
    
    $usuario = App\Models\User::find(1);

    $usuario->image()->create( $imagen );

    return $usuario;



//05 crear varias imagenes para un producto utilizando el metodo createMany
    
    $imagen = [];

    $imagen[]['url'] = 'imagenes/avatar.png'; 
    $imagen[]['url'] = 'imagenes/avatar2.png'; 
    $imagen[]['url'] = 'imagenes/avatar3.png'; 
    $imagen[]['url'] = 'imagenes/avatara.png'; 
    $imagen[]['url'] = 'imagenes/avatara.png'; 
    $imagen[]['url'] = 'imagenes/avatara.png'; 

    $producto = App\Models\Product::find(2);

    $producto->images()->createMany($imagen);

    return $producto->images;


//06 Actualizar una imagen la del usuario.
    
    $usuario = App\Models\User::find(1);

    //return $usuario->image->url;
    $usuario->image->url = 'imagenes/avatar2.png';

    $usuario->push();

    return $usuario->image;
 


//07 Actualizar la imagen de los productos

    $producto = App\Models\Product::find(2);

    //return $producto;

    $producto->images[0]->url='imagenes/a.png';

    $producto->push();

    return $producto->images;    



//08 Buscar el registro relacionado con la imagen

    $image = App\Models\Image::find(1);

    return $image->imageable;



//09 Delimitar los registros

     $producto = App\Models\Product::find(2);

     return $producto->images()->where('url','imagenes/a.png')->get();



 //10 ordenar los registros que provienen de la relacion

    $producto = App\Models\Product::find(2);

    return $producto->images()->where('url','imagenes/a.png')->orderBy('id', 'desc')->get();     



//11 Contar los registros relacionados uno a uno

    $usuario = App\Models\User::withCount('image')->get();

    $usuario = $usuario->find(1);

    return $usuario->image_count;    



//12 Contar los registros relacionados a los productos

     $productos = App\Models\Product::withCount('images')->get();

     $productos = $productos->find(2);
 
     return $productos->images_count;



//13 Contar los registros relacionados a los productos de otra forma

    $productos = App\Models\Product::find(2);
    return $productos->loadCount('images');
    


//14 Lazy loazing carga diferida

    $productos = App\Product::find(3);

    $imagen = $producto->image;

    $categoria = $producto->category;



//15 Carga previa leager loading

    $usuario = App\Models\User::with('image')->get();

    return $usuario;

    //return $usuario->image->url;



//16 Carga previa leager loading

    $producto = App\Models\Product::with('images')->get();

    return $producto;    



//17 Carga previa de multiples relaciones
    
    $producto = App\Models\Product::with('images','category')->get();

    return $producto;   



//18 Carga previa de multiples relaciones de un producto especifico
    
     $producto = App\Models\Product::with('images','category')->find(2);

     return $producto; 



//19 Delimitar los campos
    
    $producto = App\Models\Product::with('images:id,imageable_id,url','category:id,name,slug')->find(2);

    return $producto;   


    
//20 Eliminar una imagen
    
    $product = App\Models\Product::find(2);
    
    $product->images[0]->delete();

    return $product;



//21 Eliminar todas las imagenes
    
    $product = App\Models\Product::find(2);
    
    $product->images()->delete();

    return $product;
