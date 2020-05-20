<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTherapyPostureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('therapy_posture', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('therapy_id');
            $table->foreign('therapy_id')
                ->references('id')->on('therapies')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('posture_id');
            $table->foreign('posture_id')
                ->references('id')->on('postures')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('therapy_posture');
    }
}
