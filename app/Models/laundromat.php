<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laundromat extends Model
{
    use HasFactory;
    protected $fillable = [
        "No_Bon",
        "Nama",
        "Berat",
        "Harga_Satuan",
        "Harga_Total",
        "Tgl_Masuk",
        "Tgl_Keluar",
        "DP",
        "Tgl_Ambil"
    ];
    public function category()
    {
        return $this->hasOne(categories::class);
    }
}
