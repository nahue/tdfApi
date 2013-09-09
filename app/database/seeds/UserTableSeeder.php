<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
                'username' => 'tdfAdmin',
                'password' => Hash::make('tdfPassword$$')
            ));

        User::create(array(
                'username' => 'seconduser',
                'password' => Hash::make('second_password')
            ));
    }

}