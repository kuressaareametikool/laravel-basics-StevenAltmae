<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function books()
    {
        return $this->hasOneThrough(book::class, order::class), 'client_id', 'id', 'id', 'book_id';
    }
}