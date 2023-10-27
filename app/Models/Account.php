<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'currency', 'balance', 'init_amount'
    ];

    protected $primary_key = 'id';

    protected $guarded = [];

    public $currencies = [
        1 => 'USD - $',
        2 => 'EUR - €',
        3 => 'JPY - ¥',
        4 => 'CNY - ¥',
        5 => 'GBP - £',
        6 => 'CHF - Fr',
        9 => 'AUD - A$',
        10 => 'CAD - C$',
        11 => 'INR - ₹',
        12 => 'BRL - R$',
        13 => 'RUB - ₽',
        14 => 'KRW - ₩',
        15 => 'MXN - $',
        16 => 'THB - ฿',
        17 => 'SGD - S$',
        18 => 'PHP - ₱',
        19 => 'IDR - Rp',
        20 => 'ZAR - R',
        21 => 'VND - ₫',
    ];
}
