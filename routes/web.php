<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

// Home Controller per le pagine pubbliche istituzionali
Route::get('/', 'HomeController@index')->name('home');

// Route protette per gestire i piatti
Route::prefix('admin')
    ->namespace('User')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {
        Route::get('/dashboard', 'HomeController@index')->name('home');
        Route::resource('/products', 'ProductController');
        Route::get('/orders', 'OrderController@index')->name('orders');
        Route::get('/stats', 'StatsController@index')->name('stats');
});

// Route pubblica per lo show dei ristoranti con i piatti
Route::get('/restaurant/{slug}', 'Guest\UserController@show')->name('restaurant.show');

//Route pubblica per pagamento
// Route::cart('/cart', 'PaymentController@getProductsQuantities')->name('cart');
Route::get('/cart', 'CartController@cart')->name('cart');



