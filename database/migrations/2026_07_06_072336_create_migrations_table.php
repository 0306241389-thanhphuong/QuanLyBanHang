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
        Schema::create('migrations', function (Blueprint $table) {
            $table->integer('id')->primary()->unsigned()->autoIncrement()->nullable(false);
            $table->string('migration')->nullable(false);
           $table->integer('batch')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('migrations');
    }
};
