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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->boolean('status')->default(true);
            $table->foreignId('category_id')
                ->constrained('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade'); 
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->timestamps();
            $table->softDeletes(); // Sử dụng soft delete để lưu vào trash
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
