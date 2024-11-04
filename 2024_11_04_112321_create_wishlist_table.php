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
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id(); // wishlist_id INT AUTO_INCREMENT PRIMARY KEY
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // user_id INT, Foreign Key
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // product_id INT, Foreign Key
            $table->timestamps(); // added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlist');
    }
};
