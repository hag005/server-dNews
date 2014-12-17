<?php

class NoticiaTableSeeder extends Seeder {

    public function run()
    {
        DB::table('noticias')->delete();

        Noticia::create(array(
            'titulo' => 'Noticia Numero 1',
            'resumen' => 'Este es el resumen de la noticia 1',
            'contenido' => 'Contenido de la noticia 1',
            'fecha' => 123123123,
            'imagen' => 'http://www.ucn.cl/logo.png',
            'autor' => 'Diego P. Urrutia Astorga <durrutia@ucn.cl>',
            'likes' => 10,
            'tags' => 'Test, Importante'
        ));

        Noticia::create(array(
            'titulo' => 'Noticia Numero 2',
            'resumen' => 'Este es el resumen de la noticia 2',
            'contenido' => 'Contenido de la noticia 2',
            'fecha' => 1231223423,
            'imagen' => 'http://www.ucn.cl/logo.png',
            'autor' => 'Diego P. Urrutia Astorga <durrutia@ucn.cl>',
            'likes' => 3,
            'tags' => 'Test, Importante, Prueba'
        ));
    }

}