<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepasses extends Migration
{
     public function up()
     {
         Schema::create('repasses', function(Blueprint $table){

           $table->integer('codigo_imovel')->nullable($value = true);
           $table->string('tipo_repasse', 140)->nullable($value = true);
           $table->integer('codigo_caixa_escolar')->nullable($value = true);
           $table->integer('ano_parcela')->nullable($value = true);
           $table->string('nivel_ensino', 140)->nullable($value = true);
           $table->string('etapa_ensino', 140)->nullable($value = true);
           $table->string('descricao_repasse')->nullable($value = true);
           $table->integer('numero_parcela')->nullable($value = true);
           $table->decimal('valor', 8, 2)->nullable($value = true);
           $table->integer('numero_processo')->nullable($value = true);
           $table->integer('ano_processo')->nullable($value = true);

         });
     }

     public function down()
     {
         Schema::dropIfExists('repasses');
     }
}
