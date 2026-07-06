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
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigInteger('id')->primary()->unsigned()->autoIncrement()->nullable(false);  
            $table->string('reservation_code')->nullable(false);
            $table->date('reservation_date')->nullable(false);
            $table->date('reservation_time')->nullable(false);
            $table->enum('status', ['pending', 'confirmed', 'cancelled', 'completed', 'seated'])->nullable(true)->default('pending');
            $table->text('notes')->nullable(true);
            $table->string('table_number')->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
            $table->string('customer_name')->nullable(false);
            $table->string('customer_phone')->nullable(true);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
