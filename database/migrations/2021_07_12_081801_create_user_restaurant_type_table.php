<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRestaurantTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_restaurant_type', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('restaurant_type_id')->nullable();
            $table->foreign('restaurant_type_id')->references('id')->on('restaurant_types');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {        
        Schema::table('user_restaurant_type', function (Blueprint $table) {
            $table->dropForeign('user_restaurant_type_user_id_foreign');
            $table->dropForeign('user_restaurant_type_restaurant_type_id_foreign');
        });

        Schema::dropIfExists('user_restaurant_type');
    }
}
