<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('email')->unique()->nullable();
            $table->string('cpf_cnpj')->unique()->nullable();
            $table->bigInteger('tel_celular')->unique();
            $table->bigInteger('tel_residencial')->nullable();
            $table->bigInteger('tel_comercial')->nullable();
            $table->string('rua')->nullable();
            $table->smallInteger('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->integer('cep')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
