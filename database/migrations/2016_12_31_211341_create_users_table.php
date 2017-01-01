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
            $table->timestamps();
            $table->string('username', 15);
            $table->string('password', 40);
            $table->string('name', 150);
            $table->string('email', 75);
            $table->string('photo', 200);
            $table->string('twitter', 100);
            $table->string('facebook', 200);
            $table->string('instagram', 200);
            $table->string('spotify', 200);
            $table->string('website', 200);
            $table->text('bio', 1000);
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
