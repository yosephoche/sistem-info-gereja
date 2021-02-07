<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function klasis()
    {
        return $this->hasMany('App\Models\Klasis', 'wilayah_id', 'id');
    }

    public function user()
    {
        return $this->hasMany('App\Models\UserProfile', 'wilayah_id', 'id');
    }
}
