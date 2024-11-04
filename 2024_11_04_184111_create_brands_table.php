<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name')->unique(); // Nama brand
            $table->timestamps(); // Menyimpan created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
