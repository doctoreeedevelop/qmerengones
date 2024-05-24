<?php

namespace App\Models\rolesypermisos\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'full-access',
        'estado'
    ];

    public function users(){
        return $this->belongsToMany('App\Models\User')->withTimestamps();
    }

    public function permissions(){
        return $this->belongsToMany('App\Models\rolesypermisos\Models\Permission')->withTimestamps();
    }



}
