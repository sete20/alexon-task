<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['products'];
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function client()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
