<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;


    public $fillable = ['nama_tempat', 'harga', 'deskripsi', 'foto','id_kategori', 'id_lokasi', 'id_review'];
    public $visible = ['nama_tempat', 'harga', 'deskripsi', 'foto','id_kategori', 'id_lokasi', 'id_review'];
    public $timestamps = true;

    public function Kategori(){
        return $this->belongsTo(Kategori::class,'id_kategori');
    }
    public function lokasi(){
        return $this->belongsTo(Lokasi::class,'id_lokasi');
    }
            // menghapus foto
        public function deleteImage(){
          if ($this->foto && file_exists(public_path('images/destinasi' . $this->foto))){
            return unlink(public_path('images/destinasi/' .$this->foto));
          }
        }

}
