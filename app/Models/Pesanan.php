<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pesanan_detail()
    {
        return $this->hasMany(PesananDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
