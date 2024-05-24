<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rolesypermisos\Models\Role;
use App\Models\rolesypermisos\Models\Permission;
use Illuminate\Support\Facades\Gate;



class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        Gate::authorize('haveaccess', 'role.index');
        //$roles = Role::get();
        //$roles = Role::orderBy('id','Desc')->get();
        $roles = Role::orderBy('id','Desc')->paginate(10);
        //return $roles;
        return view('admin.role.index', compact('roles'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        

        Gate::authorize('haveaccess', 'role.create');
        $permissions = Permission::get();

        //return $permission;
        return view('admin.role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Gate::authorize('haveaccess', 'role.create');
        //return $request->all();
        $request->validate([
            'name'          => 'required|max:50|unique:roles,name',
            'slug'          => 'required|max:50|unique:roles,slug',
            'full-access'   => 'required|in:yes,no'
        ]);

        $role = Role::create($request->all());

        //if($request->get('permission')){
            //return $request->all();
            $role->permissions()->sync($request->get('permission'));
        //}
        /* else{
            return 'no existe';
        } */

        return redirect()->route('admin.role.index')->with('status_success', 'El Rol Se Guardo Correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        $this->authorize('haveaccess', 'role.show');
        //return $role;
        $permission_role = [];

        foreach($role->permissions as $permission )
        {
            $permission_role[] = $permission->id;
        }

        //return $permission_role;

        $permissions = Permission::get();
        //return $permissions;

        return view('admin.role.view', compact('permissions', 'role', 'permission_role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {

        $this->authorize('haveaccess', 'role.edit');

        //return $role;
        $permission_role = [];

        foreach($role->permissions as $permission )
        {
            $permission_role[] = $permission->id;
        }

        //return $permission_role;

        $permissions = Permission::get();
        //return $permissions;

        return view('admin.role.edit', compact('permissions', 'role', 'permission_role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        
        $this->authorize('haveaccess', 'role.edit');
        

        //return $request->all();
        $request->validate([
            'name'          => 'required|max:50|unique:roles,name,'.$role->id,
            'slug'          => 'required|max:50|unique:roles,slug,'.$role->id,
            'full-access'   => 'required|in:yes,no'
        ]);

        $role->update($request->all());

        //if($request->get('permission')){
            //return $request->all();
            $role->permissions()->sync($request->get('permission'));
        //}
        /* else{
            return 'no existe';
        } */

        return redirect()->route('admin.role.index')->with('status_success', 'El Rol Se Actualizo Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {

        $this->authorize('haveaccess', 'role.destroy');

        $role->delete();
        
        return redirect()->route('admin.role.index')->with('eliminar','ok');


    }
}
