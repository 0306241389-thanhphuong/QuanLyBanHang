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
        Schema::create('order_items', function (Blueprint $table) {
            $table->bigInteger('id')->primary()->unsigned()->autoIncrement()->nullable(false);  
            $table->bigInteger('id_order')->unsigned()->nullable(false);  
            $table->bigInteger('id_product')->unsigned()->nullable(false);  
            $table->integer('quantity')->nullable(false);
            $table->integer('price')->nullable(false);   
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
