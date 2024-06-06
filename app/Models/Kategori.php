<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public $fillable = ['nama_kategori'];
    public $visible = ['nama_kategori'];
    public $timestamp = true;

    public function destinasi(){
        return $this->hasMany(Destinasi::class, 'id_kategori');
    }
}


