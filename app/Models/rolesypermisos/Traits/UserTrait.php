<?php

namespace App\Models\rolesypermisos\Traits;
use App\Models\rolesypermisos\Models\Role;


trait UserTrait{

    public function roles(){
        return $this->belongsToMany('App\Models\rolesypermisos\Models\Role')->withTimestamps();
    }

    public function havePermission($permission)
    {
        
        //return 'prueba';
        //return dd($this->roles);
        //return $this->roles;

        foreach ($this->roles as $role)
        {            
            //return $this->roles;         
            if( $role['full-access'] == 'yes')
            {
                //return 'true full-access';
                return true;
            }
            
            foreach($role->permissions as $perm)
            {
                if( $perm->slug == $permission)
                {
                    //return 'true por permiso';
                    return true;
                }
            } 
        
        }            
        return false;
        
       
    }


}