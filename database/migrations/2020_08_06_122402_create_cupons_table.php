<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cupons', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('leadmarchants_id');
            $table->time('startTime');
            $table->time('endTime');
            $table->string('name');
            $table->string('baseOn');
            $table->string('type');
            $table->integer('discount');
            $table->string('currency');
            $table->string('createdBy');
            $table->longText('description');
            $table->string('status');
            $table->id();
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
        Schema::dropIfExists('cupons');
    }
}
