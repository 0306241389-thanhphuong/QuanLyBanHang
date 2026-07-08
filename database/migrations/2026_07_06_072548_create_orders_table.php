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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('payment_amount')->nullable(false);
            $table->integer('sub_total')->nullable(false);
            $table->integer('tax')->nullable(false);
            $table->integer('discount')->nullable(false);
            $table->integer('service_charge')->nullable(false);
            $table->integer('total')->nullable(false);
            $table->integer('payment_method')->nullable(false);
            $table->integer('total_item')->nullable(false);
            $table->integer('id_kasir')->nullable(false);
            $table->string('nama_kasir')->nullable(false);
            $table->string('transaction_time')->nullable(false);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
            $table->enum('order_type', ['dinein', 'reservation'])->nullable(true);
            $table->foreignId('id_reservasi')->nullable()->constrained('reservations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
