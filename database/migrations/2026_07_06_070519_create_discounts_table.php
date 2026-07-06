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
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('type', ['fixed', 'percentage'])->default('percentage')->nullable();
            $table->decimal('value',15,2)->default(0)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->date('expired_date')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
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
