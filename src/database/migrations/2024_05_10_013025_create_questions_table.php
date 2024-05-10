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
        Schema::create('questions', function (Blueprint $table) {
            
            $table->id();
            $table->integer('category_id')->nullable();
            $table->text('category_name')->nullable();
            $table->text('question')->nullable();
            $table->text('answer')->nullable();
            $table->text('tags')->nullable();
            $table->text('liks')->nullable();
            $table->text('author')->nullable();
            $table->boolean('protected')->default(True);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
