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
        Schema::create('merch_sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->default(1);
            $table->index('user_id');
            $table->string('name')->nullable();
            $table->unsignedBigInteger('item_id')->default(1);
            $table->integer('amount')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merch_sales');
    }
};
