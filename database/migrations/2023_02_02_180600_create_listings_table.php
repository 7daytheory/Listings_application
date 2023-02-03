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
        Schema::create('listings', function (Blueprint $table) {
            $table->id('listings_id');
            $table->integer('user_id');
            $table->string('listings_name');
            $table->string('listings_adress');
            $table->string('listings_website');
            $table->string('listings_email');
            $table->integer('listings_phone')->unsigned();
            $table->string('listings_bio');
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
        Schema::dropIfExists('listings');
    }
};
