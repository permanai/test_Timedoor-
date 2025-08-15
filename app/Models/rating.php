<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    use HasFactory;
    protected $table = 'rating';
    protected $fillable = ['id_buku', 'rating', 'komentar'];
    public function rating()
    {
        return $this->belongsTo(buku::class, 'id_buku');
    }
}
