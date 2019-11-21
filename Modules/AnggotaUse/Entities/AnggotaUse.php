<?php

namespace Modules\AnggotaUse\Entities;

use Illuminate\Database\Eloquent\Model;

class AnggotaUse extends Model
{
    protected $fillable = ['nip_nik_npm_anggota','id_user','nama_anggota','alamat_anggota','email_anggota','tel_anggota','foto_anggota'];

    public function User($value='')
    {
      return $this->hasOne('App\User', 'id');
    }
}
