<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use App\Models\rolesypermisos\Models\Role;
use App\Models\User;
use App\Models\rolesypermisos\Models\Permission;
use Illuminate\Auth\Events\Registered;

//------------ESTE ES EL CONTROLADOR DEL MENU DE ADMIN PPAL OSEA DONDE SE ABRE EL ADMINISTRADOR ----- //
class AdminController extends Controller
{
    
    public function index(Request $request)
    {
        //dd($request);
        //return User::all()->roles();
        //dd($event);

        //return auth()->user()->roles;
        //return auth()->user()->roles[0]->pivot->role_id;
        
        //if ((auth()->user()->roles[0]->pivot->role_id)==2){
            //return redirect()->route('home');
        //}; 
        //return 'desde el adminnnnnnnnnnnn';
        //$request->auth()->user;
        //return view('admin.category.create');
        //$categorias = Category::orderBy('nombre')->paginate(6);
        //return view('admin.category.index', compact('categorias'));
        //dd($user);

        return view('admin.adminppal');

        
    }

       public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit(string $id)
    {
        //
    }

      public function update(Request $request, string $id)
    {
        //
    }
  
    public function destroy(string $id)
    {
        //
    }
}
