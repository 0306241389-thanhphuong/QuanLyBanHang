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
       Schema::create('failed_jobs', function (Blueprint $table) {
    $table->id(); // Ngắn gọn cho cả cụm bigInteger()->primary()->unsigned()->autoIncrement()
    $table->string('uuid')->unique(); // Thường UUID của failed_jobs nên là unique
    $table->text('connection');
    $table->text('queue');
    $table->longText('payload');
    $table->longText('exception');
    
    // Giải pháp an toàn nhất cho MySQL: Cho phép NULL để tránh lỗi default value
    $table->timestamp('failed_at')->nullable(); 
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('failed_jobs');
    }
};
