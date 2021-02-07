<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klasis extends Model
{
    use HasFactory;

    protected $table = 'klasis';

    protected $fillable = [
        'name',
        'wilayah_id',
    ];

    public function wilayah()
    {
        return $this->belongsTo('App\Models\Wilayah', 'wilayah_id', 'id');
    }

    public function jemaat()
    {
        return $this->hasMany('App\Models\Jemaat', 'klasis_id', 'id');
    }
}
