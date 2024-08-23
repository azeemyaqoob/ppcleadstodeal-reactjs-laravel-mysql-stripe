<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerEmail extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
