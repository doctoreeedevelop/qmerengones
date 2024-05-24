<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Sanctum\Http\Middleware\AuthenticateSession;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    
    use AuthenticatesUsers;
    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    } 

    public function index(Request $request)
    {
        //return $request;
        return view('seguridad.index'); 
    } 

    protected function authenticated(Request $request, $user)
    {
        
        //return $request; 
        //dd($user);
        //$roles = $user->roles()->where('estado')->get();
        $roles = $user->roles()->get();
        //return $roles;
        //return $roles[0]['pivot']->role_id;
        //return $roles[0]->user_id;
        if($roles->isNotEmpty())
        {
            //return $roles;
            //$user->setSession($roles->toArray());
            //return $roles[0]['id'];
           if (count($roles) == 1)
            {
                //return $roles;
                Session::put([
                    
                    'user_id' =>  $roles[0]['pivot']->user_id,
                    'rol_id' => $roles[0]['id'],
                    'rol_nombre' => $roles[0]['name'],    //nombre pero del rol osea admid cliente etc
                    //'usuario_id' =>  $this->id, 
                    'rol_usuario' => $roles[0]['pivot']->role_id,
                    'nombre_usuario' => auth()->user()->name,
                ]);
            }
            /* if($user->roles()->where('estado' , 0)->get())
            {
                return redirect()->route('home')->withErrors(['error' => "Este rol no esta Avtivo"]);
            } */

        }else{
            $this->guard()->logout();
            $request->session()->invalidate();
            return redirect()->route('home')->withErrors(['error' => "Este rol no esta Avtivo"]);
            
        }
    }

    public function setSession($roles)
    {
        if (count($roles) == 1)
        {
            Session::put([
                
                'rol_id' => $roles[0]['id'],
                'rol_nombre' => $roles[0]['name']
                
            ]);
        }
    }
    

    

    
}
