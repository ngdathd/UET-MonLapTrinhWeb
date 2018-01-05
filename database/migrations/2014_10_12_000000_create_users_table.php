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
            $table->string('phone')->nullable();
            $table->string('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->string('job')->default("Nhân viên");
            $table->string('education')->nullable();
            $table->string('place')->nullable();
            $table->string('note')->nullable();
            $table->string('avatar')->default("user-default.png");
            $table->string('email');
            $table->string('password');
            $table->integer('position_id')->default(1);
            $table->integer('address_id');
            $table->integer('boss_id')->default(0);
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
        Schema::dropIfExists('users');
    }
}
