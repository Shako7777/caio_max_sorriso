<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doutores', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('email', 255)->unique();
            $table->string('telefone', 17);
            $table->date('data_nascimento');
            $table->string('uf', 2);
            $table->string('crm', 7)->unique();
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
        Schema::dropIfExists('doutores');
    }
}
