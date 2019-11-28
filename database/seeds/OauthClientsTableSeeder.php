<?php

use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_clients')->delete();
        
        \DB::table('oauth_clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => NULL,
                'name' => 'Book_Api',
                'secret' => 'Y5gdXhB5xM2noP9eI4O79Vo8EbZFZELB10W2GF5P',
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2019-11-15 03:55:45',
                'updated_at' => '2019-11-15 03:55:45',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => NULL,
                'name' => 'Laravel Personal Access Client',
                'secret' => 'GaYjLMryv4AmGYCmCysntJyGKG6aHpapdM1CB57h',
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2019-11-15 07:17:09',
                'updated_at' => '2019-11-15 07:17:09',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => NULL,
                'name' => 'Laravel Password Grant Client',
                'secret' => 'BKz7SWy4N3FKABIhmWHhXygFlmQUgWXYsogPoR4S',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => '2019-11-15 07:17:09',
                'updated_at' => '2019-11-15 07:17:09',
            ),
        ));
        
        
    }
}