<?php

use Illuminate\Database\Seeder;

class OauthPersonalAccessClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_personal_access_clients')->delete();
        
        \DB::table('oauth_personal_access_clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'client_id' => 1,
                'created_at' => '2019-11-15 03:55:45',
                'updated_at' => '2019-11-15 03:55:45',
            ),
            1 => 
            array (
                'id' => 2,
                'client_id' => 2,
                'created_at' => '2019-11-15 07:17:09',
                'updated_at' => '2019-11-15 07:17:09',
            ),
        ));
        
        
    }
}