<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'group_id', 'jemaat_id', 'description', 'status'
    ];

    public function pengurus()
    {
        return $this->hasMany('App\Models\PengurusOrganisasi', 'organisasi_id', 'id');
    }

    public function group()
    {
        return $this->belongsTo('App\Models\GroupOrganisasi', 'group_id', 'id');
    }

}
