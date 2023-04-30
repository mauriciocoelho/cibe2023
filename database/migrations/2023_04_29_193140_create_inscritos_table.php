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
        Schema::create('inscritos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('campo');
            $table->string('cpf');
            $table->string('telefone');
            $table->string('cidade');            
            $table->integer('qntde');
            $table->string('valor');
            $table->string('status_pagamento')->default(0);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscritos');
    }
};
