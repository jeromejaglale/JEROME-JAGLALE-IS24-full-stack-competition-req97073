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
            $table->timestamps();
            $table->text('product_id')->nullable();
            $table->text('product_name')->nullable();
            $table->text('product_owner_name')->nullable();
            $table->text('developers')->nullable();
            $table->text('scrum_master_name')->nullable();
            $table->date('start_date')->nullable();
            $table->text('methodology')->nullable();
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
