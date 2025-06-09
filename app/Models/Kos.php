<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    use HasFactory;
    protected $table = 'kos';
    protected $fillable = [
        'nama',
        'alamat',
        'keterangan',
        'harga',
        'nomor_kamar',
        'status',
        'gambar'
    ];
}
