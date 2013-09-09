<?php

class FotosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('fotos')->truncate();

		$fotos = array(
            array(
                'nombre' => 'Foto 1',
                'imageUrl' => "http://www.centralinfo.com.ar/fotosTdf/3.jpg",
                'thumbUrl' => "http://www.centralinfo.com.ar/fotosTdf/icono/3.jpg",
                'descripcion' => '@prueba',
                'categoria_id' => 1
            ),
            array(
                'nombre' => "Foto 4",
                'imagePath' => "http://www.centralinfo.com.ar/fotosTdf/4.jpg",
                'thumbPath' => "http://www.centralinfo.com.ar/fotosTdf/icono/4.jpg",
                'descripcion' => "@mauriceMoss",
                'categoria_id' => 2
            ),
            array(
                'nombre' => "Foto 5",
                'imagePath' => "http://www.centralinfo.com.ar/fotosTdf/5.jpg",
                'thumbPath' => "http://www.centralinfo.com.ar/fotosTdf/icono/5.jpg",
                'descripcion' => "@mauriceMoss",
                'categoria_id' => 2
            ),
            array(
                'nombre' => "Foto 6",
                'imagePath' => "http://www.centralinfo.com.ar/fotosTdf/6.jpg",
                'thumbPath' => "http://www.centralinfo.com.ar/fotosTdf/icono/6.jpg",
                'descripcion' => "@mauriceMoss",
                'categoria_id' => 2
            )
		);

		// Uncomment the below to run the seeder
		DB::table('fotos')->insert($fotos);
	}

}
