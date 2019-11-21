<?php

use Illuminate\Database\Seeder;

class AnggotaUsesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('anggota_uses')->delete();
        
        \DB::table('anggota_uses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nip_nik_npm_anggota' => '12312324534546567',
                'id_user' => 1,
                'nama_anggota' => 'testnama',
                'alamat_anggota' => 'alamat 123 alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123alamat 123',
                'email_anggota' => 'mail@mail.com',
                'tel_anggota' => '08912878236',
                'foto_anggota' => 'ini foto foto foto',
                'created_at' => '2019-11-15 00:00:00',
                'updated_at' => '2019-11-15 00:00:00',
            ),
        ));
        
        
    }
}