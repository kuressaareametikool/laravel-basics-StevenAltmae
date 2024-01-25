<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function client()
    {
        return $this->hasMany(client::class);
    }

    public function books()
    {
        return $this->belongsTo(book::class);
    }
}
