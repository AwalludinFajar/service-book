<?php

namespace Modules\MasterBook\Entities;

use Illuminate\Database\Eloquent\Model;

class MasterBook extends Model
{
  protected $fillable = ['idkategori','idpenerbit','judul_buku','sinopsis','pengarang','thn_terbit','cover_buku','status','idjumlah'];
  // 'id_kategori','id_penerbit',,'id_jumlah'

  public function KategoriBook($value='')
  {
    return $this->hasMany('Modules\KategoriBook\Entities\KategoriBookModel','id','id_kategori');
  }

  public function PenerbitBook($value='')
  {
    return $this->hasMany('Modules\PenerbitBook\Entities\PenerbitBookModel','id','id_penerbit');
  }

  public function JumlahBook($value='')
  {
    return $this->hasMany('Modules\JumlahBook\Entities\JumlahBookModel','id','id_jumlah');
  }
}
