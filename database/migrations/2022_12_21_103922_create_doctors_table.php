<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->constrained('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->string('doctor_name');
            $table->string('specialization');
            $table->string('doctor_age');
            $table->string('doctor_email');
            $table->longText('doctor_details');
            $table->string('doctor_address');
            $table->string('doctor_gender');
            $table->string('doctor_phone');
            $table->integer('doctor_experience');
            $table->string('doctor_date_of_birth');
            $table->string('doctor_profile');
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
        Schema::dropIfExists('doctors');
    }
}