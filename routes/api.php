<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::prefix('categories')
    ->namespace('Api')
    ->name('api.categories.')
    ->group(function () {

        // Route per accedere a tutte le categorie.
        Route::get('/', 'CategoryController@index')->name('index');

        // Route per accedere ai ristoranti per ogni categoria.
        Route::get('/{category}', 'CategoryController@show')->name('show');
    }
);

Route::prefix('restaurants')
    ->namespace('Api')
    ->name('api.restaurants.')
    ->group(function () {

        // Route per accedere a tutti i ristoranti.
        Route::get('/', 'RestaurantController@index')->name('index');

        // Route per accedere ai piatti per ogni ristorante.
        Route::get('/{restaurant}', 'RestaurantController@show')->name('show');
    }
);

Route::prefix('orders')
    ->namespace('Api')
    ->name('api.orders.')
    ->group(function () {

        // Route per accedere a tutti i ristoranti.
        Route::get('/', 'OrderController@index')->name('index');
    }
);

Route::namespace('Api')
    ->name('api.cart.')
    ->group(function () {
        Route::post('/cart-data', 'PaymentController@checkout')->name('checkout');
        Route::post('/cart-checkout', 'PaymentController@payment')->name('payment');
    }
);


Route::namespace('Api')
    ->name('api.')
    ->group(function () {
        Route::get('/stats/{id}', 'StatsController@index')->name('stats');
    }
);


<<<<<<< HEAD
=======

>>>>>>> 4c3d1eaa8bec7b4545776d7b9127f0894011446b





