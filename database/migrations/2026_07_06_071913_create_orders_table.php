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
    $table->id(); // Thay thế cho dòng id dài dòng, tự động tăng và làm khóa chính
    
    $table->string('payment_amount');
    $table->integer('sub_total');
    $table->integer('tax');
    $table->integer('discount');
    $table->integer('service_charge');
    $table->integer('total');
    $table->integer('payment_method');
    $table->integer('total_item');
    
    $table->integer('id_kasir');
    $table->string('nama_kasir');
    $table->string('transaction_time');
    
    // Đã sửa lỗi ENUM: Đặt mặc định là 'dinein' thay vì chuỗi 'null'
    $table->enum('order_type', ['dinein', 'reservation'])->default('dinein');
    
    $table->bigInteger('id_reservasi')->unsigned();
    
    // Gom lại thành một hàm chuẩn của Laravel cho gọn
    $table->nullableTimestamps(); 
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
