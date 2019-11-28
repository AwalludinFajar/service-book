<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'test',
                'email' => 'mail@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BNqoRGaOS3fiFv/wMX80MesHmNNEFonChT21WJNRvKX5xiwQ/ACF6',
                'remember_token' => NULL,
                'created_at' => '2019-11-15 03:15:00',
                'updated_at' => '2019-11-15 03:15:00',
            ),
        ));
        
        
    }
}