<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTomografiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tomografias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('caso_id')->nullable()->constrained('casos');
            $table->string('codigo_projeto', 255)->nullable()->unique();
            $table->integer('espessura_tc');
            $table->string('nome_arquivo')->nullable();
            $table->string('pasta_arquivo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tomografias');
    }
}
