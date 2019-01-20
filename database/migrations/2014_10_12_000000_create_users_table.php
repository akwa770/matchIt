<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('date_of_birth')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('religion_status')->nullable();
            $table->string('photo')->default('profile.png');
            $table->string('personal_details')->nullable();
            $table->string('permission_type')->default('intended');
            // $table->integer('permission_type');
            $table->rememberToken();
            $table->timestamps();
        });

        // Schema::table('users', function($table) {
        //     $table->foreign('permission_type')->references('id')->on('permission_types');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
