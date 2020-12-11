<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bathrooms');
            $table->integer('rooms');
            $table->integer('garages');
            $table->integer('livings');
            $table->integer('kitchens');
            $table->integer('gardens');
            $table->integer('pools');
            $table->integer('meters');
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
        Schema::dropIfExists('property_features');
    }
}
