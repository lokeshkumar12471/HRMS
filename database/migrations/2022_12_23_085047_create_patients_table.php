<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
     $table->id();
     $table->foreignId('department_id')->constrained('departments') ->onUpdate('cascade')->onDelete('cascade');
     $table->foreignId('doctor_id')->constrained('doctors')->onUpdate('cascade')->onDelete('cascade');
     $table->string('patient_name');
     $table->string('patient_date_of_birth');
     $table->string('patient_age');
     $table->string('patient_phone');
     $table->string('patient_email');
     $table->string('patient_gender');
     $table->string('patient_address');
     $table->string('patient_profile');
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
        Schema::dropIfExists('patients');
    }
}