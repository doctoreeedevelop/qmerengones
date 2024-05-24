<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\logout;
use App\Models\Category;

class LogoutController extends Controller
{
    function index()


    {
        $categorias = Category::all();
        return view('layouts.plantillappal.plantillappal', compact('categorias'));
    }
}
