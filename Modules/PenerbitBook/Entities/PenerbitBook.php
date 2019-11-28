<?php

namespace Modules\PenerbitBook\Entities;

use Illuminate\Database\Eloquent\Model;

class PenerbitBook extends Model
{
    protected $fillable = ['nama_penerbit','alamat_penerbit','kontak'];

    public function MasterBook($value='')
    {
      return $this->belongsTo('Modules\MasterBook\Entities\MasterBookModel');
    }
}
