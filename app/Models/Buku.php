<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['id_buku', 'judul_buku', 'penulis', 'penerbit', 'tanggal_terbit'])]
class Buku extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_buku';
}