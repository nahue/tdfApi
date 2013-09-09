<?php

class CategoriaTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('categoria')->truncate();

		$categoria = array(
            array('nombre' => 'Verano'),
            array('nombre' => 'Invierno')
		);

		// Uncomment the below to run the seeder
		DB::table('categoria')->insert($categoria);
	}

}
