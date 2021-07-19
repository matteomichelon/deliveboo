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
        $gateway = new \BrainTree\Gateway([
            'environment' => 'sandbox',
            'merchantId' => '28444sphxcjb55cr',            
            'publicKey' => '6h8fc9p3vdrwvdgt',
            'privateKey' => 'c6e61f1278c40cbbca173795315a5531'
        ]);
    }
}
