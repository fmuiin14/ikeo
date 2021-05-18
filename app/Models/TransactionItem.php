<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', 'products_id', 'transactions_id'
    ];

    public function product()
    {
        // tiap transaction item punya 1 product(?)
        return $this->hasOne(Product::class, 'id', 'products_id');
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'id', 'transactions_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'users_id');
    }
}
