<?php

use Illuminate\Database\Seeder;

class MasterBooksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('master_books')->delete();
        
        
        
    }
}