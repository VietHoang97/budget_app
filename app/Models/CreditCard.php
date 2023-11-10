<?php

namespace App\Models;

use Database\Seeders\Accounts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'account_id', 'number', 'limit', 'interest_rate', 'start_date', 'due_date', 'notes'
    ];
    protected $guarded = [];
    public function credits()
    {
        return $this->belongsTo(Accounts::class, 'foreign_key');
    }
}
