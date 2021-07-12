<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /* This is the migrations for Users table registration */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email',100)->unique();
            $table->string('password',255);
            $table->string('restaurant_name',100);
            $table->string('restaurant_address',100);
            $table->string('vat_number',20);
            $table->string('name',45)->nullable();
            $table->string('surname',45)->nullable();          
            $table->timestamp('email_verified_at')->nullable();            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
