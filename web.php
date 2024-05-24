<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\rolesypermisos\Models\Role;
use App\Models\rolesypermisos\Models\Permission;
use App\Http\Controllers\Rolecontroller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\FrontController;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\ProductController;
use Illuminate\Routing\Router;
use Illuminate\Auth\Events\Logout;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\PedidoController;
use App\Models\Image;

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/', function () {
    return view('plantilla.plantilla');
})->name('home'); 
 */

/* Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin', function () {
        return view('admin.adminppal');
    })->name('admin');
}); */



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin',[AdminController::class, 'index'])->name('admin');
});


//-----------PAGINAS INICIO Y PAGINAS PRINCIPALES DEL FRONTEND --------//  

Route::get('/',[FrontController::class, 'home'])->name('home');
Route::get('/catalogo', [FrontController::class, 'catalogo']);
Route::get('/categoria/{id}', [FrontController::class, 'categoria'])->name('categoria');
Route::view('blog', 'front.blog');
Route::view('nosotros', 'front.acerca_de_nosotros')->name('nosotros');
Route::view('product', 'front.product')->name('product');
Route::view('contactanos', 'front.contact')->name('contactanos');
Route::get('/detalle/{id}', [ProductController::class, 'detalle'])->name('detalle');


//-----------RUTAS DE LA PARTE ADMINISTRATIVA----------------------//


/* Route::get('/admin', function(){
    return view('admin.adminppal');
})->name('admin'); */

Route::resource('role', RoleController::class)->names('admin.role');
Route::resource('user', UserController::class)->names('admin.user');
Route::resource('admin/category', CategoryController::class)->names('admin.category');
Route::resource('admin/product', ProductController::class)->names('admin.product');
Route::resource('seguridad/logout', logoutController::class)->names('logout');
Route::get('admin/pedido', [PedidoController::class, 'index'])->name('admin.pedido.index');
Route::get('admin/pedido/edit/{id}', [PedidoController::class, 'edit'])->name('admin.pedido.edit');
Route::put('admin/pedido/update/{id}', [PedidoController::class, 'update'])->name('admin.pedido.update');

//---------RUTAS DEL CARRITO DE COMPRAS------------////

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add', [CartController::class, 'add'])->name('add');
Route::get('/cart/clear', [CartController::class, 'clear'])->name('clear');
Route::post('/cart/removeitem', [CartController::class, 'removeItem'])->name('removeitem');
Route::get('/cart/checkout', [CartController::class, 'checkOut'])->name('checkout');
Route::get('/confirmarcarrito', [CartController::class, 'confirmarCarrito'])->name('confirmarcarrito');


Route::post('/addtocart/{id}', [CartController::class, 'addtocart'])->name('addtocart');
Route::get('/eliminarcart/{id}', [CartController::class, 'eliminarcart'])->name('eliminarcart');
Route::post('/changeqty/{id}', [CartController::class, 'changeQty'])->name('changeqty');
Route::get('/incrementar/{id}', [CartController::class, 'incrementarCantidad'])->name('incrementarcantidad');
Route::get('/decrementar/{id}', [CartController::class, 'decrementarCantidad'])->name('decrementarcantidad');

/* Route::group(['prefix' => 'admin', 'middleware' =>['auth', ] 

]) */


//Route::resource('/user', UserController::class , ['except'=>['create', 'store' ]]);  










//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//---------RUTAS PARA HACER PRUEBAS NO BORRAR-------------//

Route::get('/pruebaimg', function(){

    //21 Eliminar todas las imagenes
    
    $product = App\Models\Product::find(2);
    
    $product->images()->delete();

    return $product;


});    

Route::get('/resultadosimg', function(){

    //return "resultado";

    $image = App\Models\Image::orderBy('id','Desc')->get();
    return $image;
});








Route::get('ensayo', function(){
    //return 'hola';
    $user = User::find(1)->roles;
    return $user;

});    




Route::get('/testprod', function(){


/*    
$prod = new Product();

$prod->nombre = 'producto1';
$prod->slug= 'producto1';
$prod->category_id = 1;
$prod->descripcion_corta = 'producto1';
$prod->descripcion_larga = 'producto1';
$prod->especificaciones = 'producto1';
$prod->datos_de_interes = 'producto1';
$prod->estado = 'Nuevo';
$prod->activo = 'Si';
$prod->sliderprincipal ='No';
$prod->save();
return $prod;

*/

/*
$prod = new Product();

$prod->nombre = 'producto2';
$prod->slug= 'producto2';
$prod->category_id = 2;
$prod->descripcion_corta = 'producto2';
$prod->descripcion_larga = 'producto2';
$prod->especificaciones = 'producto2';
$prod->datos_de_interes = 'producto2';
$prod->estado = 'Nuevo';
$prod->activo = 'Si';
$prod->sliderprincipal ='No';
$prod->save();
return $prod;
*/

/* 
$prod = new Product();

$prod->nombre = 'producto3';
$prod->slug= 'producto3';
$prod->category_id = 1;
$prod->descripcion_corta = 'producto3';
$prod->descripcion_larga = 'producto3';
$prod->especificaciones = 'producto3';
$prod->datos_de_interes = 'producto3';
$prod->estado = 'Nuevo';
$prod->activo = 'Si';
$prod->sliderprincipal ='No';
$prod->save();
return $prod;
*/ 

/* 
$prod = new Product();

$prod->nombre = 'producto4';
$prod->slug= 'producto4';
$prod->category_id = 4;
$prod->descripcion_corta = 'producto4';
$prod->descripcion_larga = 'producto4';
$prod->especificaciones = 'producto4';
$prod->datos_de_interes = 'producto4';
$prod->estado = 'Nuevo';
$prod->activo = 'Si';
$prod->sliderprincipal ='No';
$prod->save();
return $prod; 
*/


/* 
$prod = new Product();

$prod->nombre = 'producto5';
$prod->slug= 'producto5';
$prod->category_id = 5;
$prod->descripcion_corta = 'producto5';
$prod->descripcion_larga = 'producto5';
$prod->especificaciones = 'producto5';
$prod->datos_de_interes = 'producto5';
$prod->estado = 'Nuevo';
$prod->activo = 'Si';
$prod->sliderprincipal ='No';
$prod->save();
return $prod;
 */


/* 
$prod = new Product();

$prod->nombre = 'producto6';
$prod->slug= 'producto6';
$prod->category_id = 6;
$prod->descripcion_corta = 'producto6';
$prod->descripcion_larga = 'producto6';
$prod->especificaciones = 'producto6';
$prod->datos_de_interes = 'producto6';
$prod->estado = 'Nuevo';
$prod->activo = 'Si';
$prod->sliderprincipal ='No';
$prod->save();
return $prod;
 */




//return view('index');

//$prod = Product::find(3)->category;
//$cat = Category::find(1)->products;
//return $cat;

return view('plantilla.plantilla');



});



Route::get('/prueba', function(){
    
    $user = User::find(2);
    
    //$user->roles()->sync([1]);
    
    
    //return $user->roles;
    Gate::authorize('haveaccess', 'product.show');
    return $user;
    //return $user->havePermission('product.index');
    
    
    
});




Route::get('/test', function(){

    
    
    //---------CREACION DE OTROS ROLES PPAL----------//
    
    /* return Role::create([
        'name' => 'Guest',
        'slug' => 'guest',
        'description' => 'guest',
        'full-access'=> 'no' 
    ]);   */     
    
    /* return Role::create([
        'name' => 'Test',
        'slug' => 'test',
        'description' => 'test',
        'full-access'=> 'no'
    ]);  */
    
    /* Role::create([
        'name' => 'Registered User',
        'slug' => 'registereduser',
        'description' => 'Registered User',
        'full-access'=> 'no' 
    ]); */



    //------ empieza de aca -------//------------------------------------------
    /*
    $useradmin = User::create([
          'name' => 'admin',
          'email' => 'admin@admin.com',
          'password' => Hash::make('admin') 
    ]); 
    
    Role::create([
        'name' => 'Admin',
        'slug' => 'admin',
        'description' => 'Administrador',
        'full-access'=> 'yes' 
    ]);
    

    Role::create([
        'name' => 'Usuario Registrado',
        'slug' => 'ususarioregistrado',
        'description' => 'Usuario Registrado Rol Por Defecto',
        'full-access'=> 'no' 
    ]);



    //------CREACION DE PERMISOS----------//
    
            //-----ROLES----//
    //1 list//        
    Permission::create([
        'name' => 'Ver Menu de Roles',
        'slug' => 'role.index',
        'description' => 'Puede ver el menu de Roles -list e index-',
    ]);  
    
    //2 show//
    Permission::create([
       'name' => 'Solo Lectura de Roles',
       'slug' => 'role.show',
       'description' => 'Puede ver mas no modificar los distintos Roles -show-',
    ]);    
    
    //3 create//
    Permission::create([
        'name' => 'Crear Un Rol',
        'slug' => 'role.create',
        'description' => 'Puede Crear un Rol -create-',
    ]);  
    
    //4 edit//
    Permission::create([
        'name' => 'Editar Un Rol',
        'slug' => 'role.edit',
        'description' => 'Puede Editar un Rol -edit-',
    ]);    

    //5 destroy//
    Permission::create([
        'name' => 'Eliminar Un Rol',
        'slug' => 'role.destroy',
        'description' => 'Puede Eliminar un Rol -destroy-',
    ]);    

                    //------PERMISSION USERS---------//

    //6 listar//
    Permission::create([
        'name' =>  'Ver Menu de Usuarios',
        'slug' => 'user.create',
        'description' => 'Puede Ver El Menu De Usuarios -list E index-',
    ]);   

    //7 show//
    Permission::create([
       'name' => 'Solo Lectura de Usuarios',
       'slug' => 'user.show',
       'description' => 'Puede ver mas no modificar los distintos Usuarios -show-',
    ]);    

    //8 edit//
    Permission::create([
        'name' => 'Puede editar los Usuarios',
        'slug' => 'user.edit',
        'description' => 'Puede Editar Los Usuarios -edit-',
    ]);

    //9 destroy//
    Permission::create([
        'name' => 'Puede Eliminar un Usuario',
        'slug' => 'user.destroy',
        'description' => 'Puede Eliminar un Usuario -destroy-',
    ]); 

    
    //OJO IMPORTANTE CREAR LA RELACION ROLES CON USUARIO ADMIN A ADMIN
    $user = User::find(1);
    $user->roles()->sync([1]);
    

    

    //Hasta aca para empezar -------------------------------------
    //Nota son 9 porque el usuario no puede crearse asi mismo//
    
    */


    /* //PENDIENTES ESTOS ROLES NO LOS E IMPLEMENTADO
    //10 //
    Permission::create([
        'name' => 'Show Own User',
        'slug' => 'userown.show',
        'description' => 'Un Usuario Puede Ver Su Propio Usuario Solamnte -userown-',
    ]);


    //11  //
    Permission::create([
        'name' => 'Edit Own User',
        'slug' => 'userown.edit',
        'description' => 'Un Usuario Puede Editar Su Propio Usuario Solamnte  -editownuser-',
    ]); */


    
    
    
    
    
    
      
    
   
    
    
    
    //$role->permissions()->sync([1,1]);
    
    
        //******jhonatan video 2 29:01*******//
        //$user = User::find(1);
        //$user->roles()->attach([1,3,4]);
        //$user->roles()->detach([4]);
        //$user->roles()->sync([1,3]);
        
        //return $user->roles;
              
       
        //$role = Role::find(3);

        //return $role->permissions;
        //return $role;
        //$role->permissions()->sync([1,2]);

        //return $role->permissions;

        //$role->permissions()->sync([1,1]);
        //return $role->permissions;

       
});