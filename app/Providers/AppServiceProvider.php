<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
        $gateway = new \Braintree\Gateway([
            'environment' => 'sandbox',
            'merchantId' => '756bbwwdqk9r8v9q',
            'publicKey' => 'qxy79x86pvjwkp7v',
            'privateKey' => '3050872e3dc67395fc7036d3dbc1472d'
        ]);
        
    }
}
