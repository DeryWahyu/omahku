<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Kos extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
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
