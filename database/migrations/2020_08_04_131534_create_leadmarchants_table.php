<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadmarchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leadmarchants', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('mobile');
            $table->string('phone')->nullable();
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('location')->nullable();
            $table->string('storeName');
            $table->string('logo')->nullable();
            $table->string('type');
            $table->string('condition')->nullable();
            $table->string('contact')->nullable();
            $table->string('supportEmail')->nullable();
            $table->string('altContact')->nullable();
            $table->time('openTime')->nullable();
            $table->time('closeTime')->nullable();
            $table->string('maplink')->nullable();
            $table->string('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leadmarchants');
    }
}
