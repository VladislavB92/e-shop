<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToProducts extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('delivery_price');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
