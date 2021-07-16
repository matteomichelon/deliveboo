<?php
namespace App\Traits;

use Illuminate\Support\Str;
use App\User;

trait CalculateRestaurantSlug {


    public function calculateRestaurantSlug($restaurant_name) {

        $restaurant_slug = Str::slug($restaurant_name, '-');
        $base_slug = $restaurant_slug;

        // Controlliamo che non esista un restaurant con questo slug
        $restaurant_with_existing_slug = User::where('slug', '=', $restaurant_slug)->first();
        $counter = 1;

        // Se esiste tento con altri slug
        while($restaurant_with_existing_slug) {
            // Provo on un nuovo slug appendendo il counter
            $restaurant_slug = $base_slug . '-' . $counter;
            $counter++;

            // Se anche il nuovo slug esiste nel db, il while continua...
            $restaurant_with_existing_slug = User::where('slug', '=', $restaurant_slug)->first();
        }

        return $restaurant_slug;
    }
}
