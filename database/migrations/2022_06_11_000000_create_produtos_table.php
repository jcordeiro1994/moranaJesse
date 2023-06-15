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
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigInteger('sku')->unique();
            $table->string('nome');
            $table->integer('quantidade');
            $table->string('tipo');
            $table->string('descricao');
            $table->decimal('valor',19,2);
            $table->string('tamanho');
            $table->string('banho');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
