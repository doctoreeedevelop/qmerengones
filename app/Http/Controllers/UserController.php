<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rolesypermisos\Models\Role;
use App\Models\User;
use App\Models\rolesypermisos\Models\Permission;
use App\Http\Requests\ValidacionUsuario;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Sanctum\Http\Middleware\AuthenticateSession;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    use AuthenticatesUsers;
    //use RedirectsUsers;

    /* public function __construct()
    {
        $this->middleware('guest')->except('logout');
    } */
   
    public function index()
    {

        $this->authorize('haveaccess', 'user.create');        
        //$roles = Role::get();
        //$roles = Role::orderBy('id','Desc')->get();
        $users = User::with('roles')->orderBy('id','Desc')->paginate(10);
        //return $users;
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', User::class);
        //return view('admin.user.create');
    }

    public function guardar()  //PORQUE EL CREATE ESTA DENTO DE LAS RUTAS DE ADMIN ENTONCES ESTA ESTA POR FUERA
    {
        //dd($request->all());
        return view('admin.user.create');
    }

    
    
    public function store(ValidacionUsuario $request)
    {
        //dd($request->all());
        $user = User::create($request->all());
        $user->roles()->sync([2]);
        //return $usuario->email;
        $user->save();
        $this->authenticated($request, $user);
        
        //$cart = Session::get('user');  
        /* Session::put([
            
            'id' => $usuario->id,
            'name' => $usuario->name,
            
            
        ]); */
        return redirect()->route('login')->with('user', $user);
    }

    protected function registered(Request $request, $user)
    {
        Session::put([
                    
            'id' => $user->id,
            'email' => $user->email,
            'nombre_usuario' => $user->name
            
        ]);
    }

    protected function authenticated(Request $request, $user)
    {
        
        //$roles = $user->roles()->where('estado', 1)->get();
        //return $roles[0]->user_id;
        //if($roles->isNotEmpty())
        //{
            //$user->setSession($roles->toArray());
           //if (count($roles) == 1)
            //{
                //var_dump(auth());
                //return $user;
                Session::put([
                    
                    'id' => $user->id,
                    'email' => $user->email,
                    'nombre_usuario' => $user->name
                    
                ]);
            //} 

        //}
    }
    
    
    public function show(User $user)
    {
        //$this->authorize('view', [$user, ['user.show', 'userown.show']]);
        $roles = Role::orderBy('name')->get();

        //return $roles;

        return view('admin.user.view', compact('roles', 'user'));
    }

  
    public function edit(User $user)
    {
        
        $this->authorize('haveaccess', 'user.edit'); //invento
        //$this->authorize('update', $user); //original
        $roles = Role::orderBy('name')->get(); //original

        //return $roles;

        return view('admin.user.edit', compact('roles', 'user'));

    }

   
    public function update(Request $request, User $user)
    {
        $request->validate([
           
            'name'          => 'required|max:50|unique:users,name,'.$user->id,
            'email'          => 'required|max:50|unique:users,email,'.$user->id
           
        ]);

        //dd($request->all());
        
        $user->update($request->all());
        $user->roles()->sync($request->get('roles'));
        return redirect()->route('admin.user.index')->with('status_success', 'El Usuario Se Actulizo Correctamente');
        
        
        
    }

   
    public function destroy(User $user)
    {
        $user->delete();
        
        return redirect()->route('admin.user.index')->with('status_success', 'El Usuario Se A Eliminado Correctamente');
    }

   
}
