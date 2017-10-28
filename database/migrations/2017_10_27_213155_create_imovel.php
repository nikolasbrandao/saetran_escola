<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('imovel', function(Blueprint $table){

        $table->integer('codigo')->nullable($value = true);
        $table->integer('codigo_imovel')->nullable($value = true);
        $table->string('regional', 255)->nullable($value = true);
        $table->string('cidade', 255)->nullable($value = true);
        $table->integer('inep')->nullable($value = true);
        $table->string('anexo', 50)->nullable($value = true);
        $table->string('descricao', 255)->nullable($value = true);
        $table->string('nome', 255)->nullable($value = true);
        $table->string('modalidade', 100)->nullable($value = true);
        $table->string('situacao', 140)->nullable($value = true);
        $table->string('ocupacao', 140)->nullable($value = true);
        $table->integer('educacao_infantil_presencial')->nullable($value = true);
        $table->integer('anos_finais_presencial')->nullable($value = true);
        $table->integer('ensino_medio_presencial')->nullable($value = true);
        $table->integer('educacao_profissional_presencial')->nullable($value = true);
        $table->integer('eja_presencial')->nullable($value = true);
        $table->integer('eja_semipresencial')->nullable($value = true);
        $table->integer('magisterio_ead')->nullable($value = true);
        $table->integer('eja_ead')->nullable($value = true);
        $table->integer('educacao_presencial_ead')->nullable($value = true);
        $table->integer('total_escolarizacao')->nullable($value = true);
        $table->string('cep', 10)->nullable($value = true);
        $table->string('logradouro', 140)->nullable($value = true);
        $table->string('numero', 140)->nullable($value = true);
        $table->string('complemento', 140)->nullable($value = true);
        $table->string('bairro', 140)->nullable($value = true);
        $table->timestamp('data_cadastro')->nullable($value = true);
        $table->timestamp('ultima_atualizacao')->nullable($value = true);
        $table->string('latitude', 140)->nullable($value = true);
        $table->string('longitude', 140)->nullable($value = true);
        $table->integer('anos_iniciais_presencial')->nullable($value = true);
        $table->integer('educacao_profissional_ead')->nullable($value = true);

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imovel');
    }
}
