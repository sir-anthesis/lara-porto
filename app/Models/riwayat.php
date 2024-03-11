<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat extends Model
{
    use HasFactory;
    protected $table = "riwayat";
    protected $fillable = ['judul', 'tipe', 'tgl_mulai', 'tgl_akhir', 'info1', 'info2', 'info3', 'isi'];
    // protected $appends = ['tgl_mulai_attribute', 'tgl_akhir_attribute'];

    // public function getTglMulaiAttribute()
    // {
    //     return Carbon::parse($this->attributes['tgl_mulai'])->translatedFormat('Y F d');
    // }

    // public function getTglAkhirAttribute()
    // {
    //     return Carbon::parse($this->attributes['tgl_akhir'])->translatedFormat('Y F d');
    // }
}
