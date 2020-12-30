<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name')->required();
            $table->string('lastname')->required();
            $table->string('email')->unique();
            $table->string('phone_number')->required();
            $table->bigInteger('cuil')->required();
            $table->string('password')->required();
            $table->string('photo')->default(NULL);
            $table->rememberToken();
            $table->timestamps();

            $table->foreignId('role_id')->constrained('roles');

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
