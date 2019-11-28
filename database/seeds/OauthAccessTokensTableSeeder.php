<?php

use Illuminate\Database\Seeder;

class OauthAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_access_tokens')->delete();
        
        \DB::table('oauth_access_tokens')->insert(array (
            0 => 
            array (
                'id' => '28822368e2d7e778002e6e2938673f3373b06258653fdd93a7fb0681024fd3522cf62b00d7d945eb',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 1,
                'created_at' => '2019-11-15 07:02:37',
                'updated_at' => '2019-11-15 07:02:37',
                'expires_at' => '2019-11-22 07:02:37',
            ),
            1 => 
            array (
                'id' => '5e42539570c30835061a07d6a941751f53f11703a63cd266479873c340b19885825c85c21ef6dc7f',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2019-11-15 03:56:03',
                'updated_at' => '2019-11-15 03:56:03',
                'expires_at' => '2019-11-22 03:56:03',
            ),
            2 => 
            array (
                'id' => '7ea5fe76fbf582f36c279ef96c56b023c90044564a3bd1887626dffe4fc71ba1bc1e17ad6ace908b',
                'user_id' => 1,
                'client_id' => 2,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2019-11-15 07:41:54',
                'updated_at' => '2019-11-15 07:41:54',
                'expires_at' => '2019-11-22 07:41:54',
            ),
            3 => 
            array (
                'id' => '96ec28e472152d71af81e5e219a31529eac37ebc3bad01e897cd381e776ea291c2c91259fa59020c',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'Personal Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2019-11-15 04:14:20',
                'updated_at' => '2019-11-15 04:14:20',
                'expires_at' => '2019-11-22 04:14:20',
            ),
        ));
        
        
    }
}