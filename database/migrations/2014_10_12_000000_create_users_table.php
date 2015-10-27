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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('login')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('password', 60);
            $table->enum('title', ['mrs', 'miss']);
            $table->enum('role', ['user', 'shop_admin', 'admin']);
            $table->string('profile_picture')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile_phonenumber')->nullable();
            $table->integer('balance')->default(0);
            $table->string('password_remember');
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
