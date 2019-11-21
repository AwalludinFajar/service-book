<?php

namespace Modules\KategoriBook\Entities;

use Illuminate\Database\Eloquent\Model;

class KategoriBook extends Model
{
    protected $fillable = [];

    public function MasterBook($value='')
    {
      return $this->belongsTo('Modules\MasterBook\Entities\MasterBookModel');
    }
}
