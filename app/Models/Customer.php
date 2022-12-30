<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'address',
        'payment_proof'
    ];

    public function product() {
        return $this->belongsTo('App\Models\Product');
    }
}
