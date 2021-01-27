<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    public function kategori()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'author', 'id');
    }
}
