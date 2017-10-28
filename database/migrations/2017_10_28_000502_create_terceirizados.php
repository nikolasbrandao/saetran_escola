<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerceirizados extends Migration
{
  public function up()
  {
      Schema::create('terceirizados', function(Blueprint $table){

        $table->integer('codigo_imovel')->nullable($value = true);
        $table->string('tipo', 140)->nullable($value = true);
        $table->string('posto_trabalho', 140)->nullable($value = true);
        $table->integer('quantidade')->nullable($value = true);
        $table->decimal('valor_unitario', 8, 2)->nullable($value = true);
        $table->timestamp('data_ultima_atualizacao')->nullable($value = true);

      });
  }

  public function down()
  {
      Schema::dropIfExists('terceirizados');
  }
}
