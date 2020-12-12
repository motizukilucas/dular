<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdemServicoAparelhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordem_servico_aparelhos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_ordem_servico')->constrained('ordem_servicos');
            $table->foreignId('id_aparelho')->constrained('aparelhos');
            $table->text('acessorios')->nullable();
            $table->text('defeito_informado');
            $table->date('entrada', 6);
            $table->date('saida', 6)->nullable();
            $table->date('retorno', 6)->nullable();
            $table->date('segunda_saida', 6)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordem_servico_aparelhos');
    }
}
