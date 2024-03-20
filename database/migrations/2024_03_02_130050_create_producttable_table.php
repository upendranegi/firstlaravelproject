<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('producttable', function (Blueprint $table) {
            $table->id();
            $table->string('Productname');
            $table->string('product_id')->unique();
            $table->string('category_id');
            $table->integer('quntity');
            $table->string('product_img1');
            $table->string('product_img2');
            $table->string('product_img3');
            $table->string('product_img4');
            $table->string('Description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producttable');
    }
};
