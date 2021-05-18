<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', 'products_id';
    ];

    public function product()
    {
        // one to one, hasOne
        // foreign key, local key
        return $this->hasOne(Product::class, 'id', 'products_id');
    }

    public function user()
    {
        // foreign key -> local key
        // many to one, belongsTo
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
