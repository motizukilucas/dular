<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdemServicoPecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordem_servico_pecas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_ordem_servico_aparelho')->constrained('ordem_servico_aparelhos');
            $table->string('peca');
            $table->double('preco');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordem_servico_pecas');
    }
}
