<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    // public function user()
    // {
    //     return $this->belongsTo('App\User', 'foreign_key', 'other_key');
    // }

    public function artikel()
    {
        return $this->hasMany('App\Models\Artikel', 'category', 'id');
    }

}
