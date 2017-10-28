<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestor', function(Blueprint $table){

          $table->integer('codigo_imovel')->nullable($value = true);
          $table->string('tipo_eleito',30)->nullable($value = true);
          $table->string('cargo', 60)->nullable($value = true);
          $table->string('situacao_cargo', 50)->nullable($value = true);
          $table->integer('matricula')->nullable($value = true);
          $table->string('nome', 255)->nullable($value = true);
          $table->string('cpf', 14)->nullable($value = true);
          $table->string('telefone', 25)->nullable($value = true);
          $table->string('celular', 25)->nullable($value = true);
          $table->string('celular2', 25)->nullable($value = true);
          $table->string('email', 100)->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gestor');
    }
}
