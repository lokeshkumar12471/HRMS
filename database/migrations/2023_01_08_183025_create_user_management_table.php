<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_management', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->constrained('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename');
            $table->string('birthday');
            $table->string('birth_place');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('designation');
            $table->string('user_role');
            $table->string('house_no');
            $table->string('state');
            $table->string('city');
            $table->string('mobile_number');
            $table->string('phone_number');
            $table->string('email_address');
            $table->string('username');
            $table->string('password');
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
        Schema::dropIfExists('user_management');
    }
}