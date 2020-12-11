<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description');
            $table->integer('price');
            $table->integer('ambient_numbers');
            $table->boolean('property_status')->comment('1 para ACTIVO, 0 para INACTIVO');
            $table->string('property_type');

            $table->timestamps();

            $table->foreignId('user_id')->constrained('users')->after('id');
            $table->foreignId('address_id')->constrained('addresses')->after('user_id');
            $table->foreignId('property_feature_id')->constrained('property_features')->after('address_id');
            $table->foreignId('property_image_id')->constrained('property_images')->after('property_feature_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
