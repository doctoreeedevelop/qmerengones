<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;
use App\Models\ShoppingCart;

class ShoppingCartProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        /* view()->composer("*", function($view)
        {
            
            $session_name = 'shopping_cart_id';
            $shopping_cart_id = Session::get($session_name);
            $shopping_cart = ShoppingCart::findOrCreateBySessionId($shopping_cart_id);                                            
            Session::put($session_name, $shopping_cart_id );
            $view->with('shopping_cart', $shopping_cart);


        }); */
    }
}
