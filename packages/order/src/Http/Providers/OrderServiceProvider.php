<?php

namespace Order\Http\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Session;
class OrderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/../routes.php';
        }

        $total = 0;
        if(session()->has('carts')) {
            $produits = session()->get('carts');
            foreach ($produits as $key => $value) {
                $total += $value['prix'];
            }
        }
        View::share('total', $total);

        $this->loadViewsFrom(__DIR__.'/../../Views', 'order');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
