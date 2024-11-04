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
        Schema::create('products_tabel', function (Blueprint $table) {
            $table->id(); // product_id INT AUTO_INCREMENT PRIMARY KEY
            $table->string('name'); // name VARCHAR(100)
            $table->text('description')->nullable(); // description TEXT
            $table->string('category')->nullable(); // category VARCHAR(50)
            $table->string('brand')->nullable(); // brand VARCHAR(50)
            $table->decimal('price', 10, 2); // price DECIMAL(10, 2)
            $table->timestamps(); // created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_tabel');
    }
};
