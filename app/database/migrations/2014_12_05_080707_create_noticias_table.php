<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function(Blueprint $table)
        {
            $table->increments('id');
            $table->text('titulo');
            $table->text('resumen');
            $table->text('contenido');
            $table->integer('fecha');
            $table->text('imagen');
            $table->text('autor');
            $table->integer('likes');
            $table->text('tags');
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
        Schema::table('noticias', function(Blueprint $table)
        {
            Schema::drop('noticias');
        });
    }

}
