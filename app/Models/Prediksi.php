<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prediksi extends Model
{
    protected $fillable = [
        'pasaran_id',
        'tanggal',
        'am1',
        'am2',
        'am3',
        'ja1',
        'ja2',
        'ja3',
        'mau',
        'binatang',
        'shio',
        'url_gambar',
        'makau',
        'syair_id',
        'angka'
    ];

    use HasFactory;

    public function pasaran() 
    {
        return $this->belongsTo(Pasaran::class);
    }

    public function syair() 
    {
        return $this->belongsTo(Syair::class);
    }
}
