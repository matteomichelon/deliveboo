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
            'merchantId' => 'fh2wdvfqchw8yd4t',
            'publicKey' => 'vgymk2dzyzcq8bmr',
            'privateKey' => '1ab6688144e52d1a20c4e0f9eae1f8a6'
        ]);
    }
}
