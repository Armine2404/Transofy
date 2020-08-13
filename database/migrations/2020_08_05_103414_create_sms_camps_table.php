<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsCampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_camps', function (Blueprint $table) {
            $table->string('name');
            $table->string('description');
            $table->dateTime('startTime');
            $table->string('frequency');
            $table->string('sentTo');
            $table->string('userType');
            $table->string('createdBy');
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
        Schema::dropIfExists('sms_camps');
    }
}
