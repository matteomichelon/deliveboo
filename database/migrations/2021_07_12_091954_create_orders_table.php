<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code', 45);
            $table->float('price', 7, 2);
            $table->tinyInteger('status')->default(0);
            $table->dateTime('date');
            $table->string('address', 100);
            $table->string('name', 45);
            $table->string('surname', 45);
            $table->string('email', 100);
            $table->text('notes')->nullable();
            $table->string('telephone_number', 45);         
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
        Schema::dropIfExists('orders');
    }
}
