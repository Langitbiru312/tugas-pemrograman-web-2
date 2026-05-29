<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['id_buku', 'judul_buku', 'penulis', 'penerbit', 'tanggal_terbit'])]
class Buku extends Model
{
    /** @use HasFactory<\Database\Factories\BukuFactory> */
    use HasFactory;
    
public function kategori()
{
    return $this->belongsTo(Kategori::class);
}

public function supplier()
{
    return $this->belongsTo(Supplier::class);
}
    //protected $fillable = ['id_buku', 'judul_buku', 'penulis', 'penerbit', 'Tahun_terbit'];
    //protected $guarded = ['id'];
}

