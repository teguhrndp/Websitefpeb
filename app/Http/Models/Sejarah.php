<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model {

  protected $table = 'sejarah';
  protected $primaryKey = 'id';
  protected $cast = ['deskripsi'=>'string','gambar'=>'string','tahun'=>'string','ket'=>'string'];
  protected $fillable = [
    'deskripsi',
    'gambar',
    'tahun',
    'ket'
  ];


}
