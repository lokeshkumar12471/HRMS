<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomallotmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_allotments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained('doctors')->onUpdate('cascade')->onDelete('cascade');
            $table->string('roomnumber');
            $table->string('roomtype');
            $table->string('roomfloor');
            $table->string('roomrate');
            $table->string('patientname');
            $table->string('allotmentdate');
            $table->string('dischargedate');
            $table->string('totalbeds');
            $table->string('occupiedbeds');
            $table->string('unoccupiedbeds');



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
        Schema::dropIfExists('roomallotments');
    }
}