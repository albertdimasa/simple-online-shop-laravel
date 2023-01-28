<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
