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
        Schema::create('inventories', function (Blueprint $table) {
            $table->bigInteger('id')->primary()->unsigned()->autoIncrement()->nullable(false);  
            $table->string('name')->nullable(false);
            $table->integer('stock')->nullable(false);
            $table->string('unit')->nullable(false);
            $table->bigInteger('supplier_id ')->unsigned()->nullable(false);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
