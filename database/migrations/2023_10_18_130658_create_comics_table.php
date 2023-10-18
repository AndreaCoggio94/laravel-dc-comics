<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            // title
            $table->string('title', 50);
            // description
            $table->text('description');
            // thumb
            $table->string('thumb', 50);
            // price
            $table->float('price', 5, 2);
            // series
            $table->string('series', 50);
            // sale_date
            $table->dateTime('sale_date');
            // type

            // artists

            // writers

            
            
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
        Schema::dropIfExists('comics');
    }
};