<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model {

  protected $table = 'visi_misi';
  protected $primaryKey = 'id';
  protected $cast = ['visi'=>'string','misi'=>'string','tujuan'=>'string','gambar'=>'string','ket'=>'string'];
  protected $fillable = [
    'visi',
    'misi',
    'tujuan',
    'gambar',
    'ket'
  ];


}
