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
    $table->id(); // Cách viết ngắn gọn, tự động là BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
    
    // Khóa ngoại liên kết với bảng categories (Không tự tăng)
    $table->foreignId('category_id')->constrained()->onDelete('cascade');
    
    $table->string('name');
    $table->text('description');
    $table->string('image');
    $table->integer('price');
    $table->integer('stock');
    $table->tinyInteger('is_available')->default(1); // Nên để mặc định là 1 (còn hàng)
    
    // Sử dụng hàm này thay vì tự viết timestamp thủ công để tránh lỗi Invalid default value cũ
    $table->nullableTimestamps(); 
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
