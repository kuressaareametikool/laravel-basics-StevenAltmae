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
        Schema::create('books', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('title');
            $table->year('release_date');
            $table->string('cover_path')->nullable();
            $table->string('language');
            $table->text('summary');
            $table->decimal('price', 13, 4);
            $table->string('stock_saldo');
            $table->integer('pages');
            $table->enum('type', ['new', 'used', 'ebook']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};