<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('sub_category')->nullable();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('brand')->nullable();
            $table->double('price');
            $table->double('old_price')->nullable();
            $table->integer('discount')->default(0);
            $table->integer('sold')->default(0);
            $table->integer('stock')->default(10);
            $table->string('eta')->nullable();
            $table->string('image_path')->nullable();
            $table->string('font_awesome_icon')->nullable();
            $table->boolean('is_flashsale')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
