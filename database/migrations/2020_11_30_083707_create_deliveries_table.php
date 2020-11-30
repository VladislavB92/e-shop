<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('size');
            $table->string('carrier');
            $table->string('price');
        });
    }

    public function down()
    {
        Schema::dropIfExists('deliveries');
    }
}