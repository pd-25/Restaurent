<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->string('foodname')->nullable();
        $table->string('price')->nullable();
        $table->string('quantity')->nullable();
        $table->string('name')->nullable();
        $table->string('address')->nullable();
        $table->string('Phone_number')->nullable();
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
        //
        Schema::dropIfExists('orders');
    }
}
