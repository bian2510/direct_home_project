<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('divise', 3)->comment('ARS = peso argentino, USD = dolar');
            $table->datetime('payment_date');
            $table->integer('payment_amount');
            $table->string('payment_method', 100);
            $table->integer('num_transaction');
            $table->timestamps();

            $table->foreignId('user_id')->constrained('users')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
