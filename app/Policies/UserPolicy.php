<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    public function viewAny(User $usera): bool
    {
        //
    }

     
    public function create(User $usera): bool
    {
        return $usera->id > 0;
    }

   
    public function update(User $usera, User $user): bool
    {
        return $usera->id === $user->id;
    }

    /* public function view(User $usera, User $user, $perm=null): bool
    {

        if($user->havePermission($perm[0]))
        {
            return $usera->id === $user->id;
            //return true;
        }else
        if($user->havePermission($perm[1]))
        {
            return true;            
        }else
        {
            return false;
        }
    } */



}
