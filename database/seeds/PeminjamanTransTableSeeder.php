<?php

use Illuminate\Database\Seeder;

class PeminjamanTransTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('peminjaman_trans')->delete();
        
        
        
    }
}