<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $table = "histories";

    protected $fillable = ['title', 'tipe', 'tanggal_mulai', 'tanggal_akhir', 'info1', 'info2', 'info3', 'content'];

    // Column bantuan buat acessor atau untuk merubah format tanggal
    protected $appends = ['tanggal_mulai_indo', 'tanggal_akhir_indo'];
    //* Jika Ingin merubah format tanggal menjadi Indonesia maka merubah di bagian config/app.php dan rubah pada bagian timezone dan UTC

    //Pembuatan Acessor
    public function getTanggalMulaiIndoAttribute()
    {
        // atributes di ambil dari nama fillable atau nama aslinya yang terdapat di variabel $appends
        return Carbon::parse($this->attributes['tanggal_mulai'])->translatedFormat('d F Y');
    }
    public function getTanggalAkhirIndoAttribute()
    {
        // if ($this->attributes['tanggal_akhir']) {
        //     return Carbon::parse($this->attributes['tanggal_akhir'])->translatedFormat('d F Y');
        // } else {
        //     return 'Present';
        // }

        // Menggunakan Ternary Operator
        return ($this->attributes['tanggal_akhir']) ? Carbon::parse($this->attributes['tanggal_akhir'])->translatedFormat('d F Y') : 'Present';
    }
}
