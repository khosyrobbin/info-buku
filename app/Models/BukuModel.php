<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuModel extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kode_buku', 'judul', 'penerbit', 'tanggal_terbit',
    ];
    // Method untuk mengisi kolom "kode_buku" secara otomatis
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Ambil nilai "kode_buku" terbesar yang sudah ada dalam tabel buku
            $maxKodeBuku = static::max('kode_buku');

            // Tentukan kode buku berikutnya (tambah 1 dari nilai maksimum)
            $nextKodeBuku = $maxKodeBuku + 1;

            $model->kode_buku = $nextKodeBuku;
        });
    }
}
