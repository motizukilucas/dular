<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdemServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordem_servicos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_cliente')->constrained('clientes');
            $table->foreignId('id_atendente')->constrained('funcionarios');
            $table->double('preco');
            $table->string('forma_pagamento')->nullable();
            $table->double('desconto')->nullable();
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordem_servicos');
    }
}
