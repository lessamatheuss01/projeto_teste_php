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
        Schema::create('itensvenda', function (Blueprint $table) {
            $table->id();
            $table->integer('qtd');
            $table->unsignedBigInteger('fk_pedido');
            $table->unsignedBigInteger('fk_produto');
            $table->foreign('fk_pedido')->references('id')->on('pedidos');
            $table->foreign('fk_produto')->references('id')->on('produtos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itensvenda');
    }
};
