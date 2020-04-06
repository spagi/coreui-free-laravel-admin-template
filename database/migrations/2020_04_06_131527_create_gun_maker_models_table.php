<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGunMakerModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gun_maker', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('address',255)->nullable();
            $table->string('city',255)->nullable();
            $table->integer('location')->nullable();
            $table->text('contact')->nullable();
            $table->string('in',255)->nullable();
            $table->text('description')->nullable();
            $table->string('name',255);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gun_maker');
    }
}
