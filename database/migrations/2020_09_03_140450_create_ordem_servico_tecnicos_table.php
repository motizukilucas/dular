<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdemServicoTecnicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordem_servico_tecnicos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_ordem_servico_aparelho')->constrained('ordem_servico_aparelhos');
            $table->foreignId('id_tecnico')->constrained('funcionarios');
            $table->string('defeito_constatado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordem_servico_tecnicos');
    }
}
