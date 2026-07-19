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
        Schema::create('discounts', function (Blueprint $table) {
            $table->bigInteger('id')->primary()->unsigned()->autoIncrement();
            $table->string('name')->nullable(false);
            $table->text('description')->nullable();
            $table->enum('status', ['active','inactive'])->default('active');
            $table->date('expired_date')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
