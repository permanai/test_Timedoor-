<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = ['nama_buku', 'nama_pengarang', 'id_kategori', 'deskripsi', 'tgl_publish'];

    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori');
    }
    public function rating()
    {
        return $this->hasmany(rating::class, 'id_buku');
    }
}
