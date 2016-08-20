<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('user_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('father_name');
            $table->string('type');
            $table->string('institute_type');
            $table->date('admission_date');
            $table->string('admission_number');
            $table->date('dob');
            $table->string('city');
            $table->string('district');
            $table->string('blood_group');
            $table->string('user_id_card_number');
            $table->string('guardian_id_card_number');
            $table->string('landlord_number');
            $table->string('mobile_number');
            $table->string('guardian_mobile_number');
            $table->string('academic_background');
            $table->string('academic_background_institute_name');
            $table->string('permanent_address');
            $table->string('current_address');
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
