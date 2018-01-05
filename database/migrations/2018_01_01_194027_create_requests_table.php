<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('level_id')->nullable();
            $table->integer('user_create_id')->nullable();
            $table->integer('user_solved_id')->nullable();
            $table->string('deadline');
            $table->string('create')->nullable();
            $table->integer('address_id');
            $table->integer('relative_id')->nullable();
            $table->string('content_req');
            $table->integer('comment_id')->nullable();
            $table->integer('status_id')->default(1);
            $table->string('file')->nullable();
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
        Schema::dropIfExists('requests');
    }
}
