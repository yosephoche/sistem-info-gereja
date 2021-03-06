<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jemaat extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'klasis_id',
    ];

    public function user_profile()
    {
        return $this->hasMany('App\Models\UserProfile', 'jemaat_id', 'id');
    }

    public function klasis()
    {
        return $this->belongsTo('App\Models\Klasis', 'klasis_id', 'id');
    }

    public function kelompok()
    {
        return $this->hasMany('App\Models\Kelompok', 'jemaat_id', 'id');
    }
}
