<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    protected $fillable = [
        "No_Bon",
        "List_Barang"
    ];

    public function laundromats()
    {
        return $this->hasOne(laundromat::class);
    }
}
