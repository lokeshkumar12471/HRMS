<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->constrained('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('doctor_id')->constrained('doctors')->onUpdate('cascade')->onDelete('cascade');
            $table->string('appointment_name');
            $table->string('appointment_date_of_birth');
            $table->string('appointment_age');
            $table->string('appointment_phone');
            $table->string('appointment_email');
            $table->string('appointment_gender');
            $table->string('appointment_address');
            $table->string('appointment_problem');
            $table->string('appointment_date');
            $table->string('appointment_time_slot');
            $table->string('appointment_token_number');
            $table->string('appointment_profile');
            $table->integer('role_id');
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
        Schema::dropIfExists('appointments');
    }
}