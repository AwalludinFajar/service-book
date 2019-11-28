<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AnggotaUsesTableSeeder::class);
        $this->call(DendaTransTableSeeder::class);
        $this->call(KategoriBooksTableSeeder::class);
        $this->call(PeminjamanTransTableSeeder::class);
        $this->call(PenerbitBooksTableSeeder::class);
        $this->call(PengembalianTransTableSeeder::class);
        $this->call(PetugasUsesTableSeeder::class);
        $this->call(MasterBooksTableSeeder::class);
        $this->call(OauthAccessTokensTableSeeder::class);
        $this->call(OauthClientsTableSeeder::class);
        $this->call(OauthPersonalAccessClientsTableSeeder::class);
    }
}
