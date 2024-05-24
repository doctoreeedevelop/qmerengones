<?php

namespace App\Http\Controllers;
use App\Http\Middleware\Authenticate;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    use Authenticate;
}
