<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('size');
            $table->string('price');
            $table->boolean('free_shipping');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}
