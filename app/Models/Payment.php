<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_code',
        'payment',
        'total_payment',
    ];

    protected $primaryKey  = 'payment_code';
    protected $keyType = 'string';

    public function orderDetail()
    {
        return $this->hasMany('App\Models\OrderDetail', 'payment_code');
    }
}
