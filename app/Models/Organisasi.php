<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'jemaat_id', 'description', 'status'
    ];

    public function pengurus()
    {
        return $this->hasOne('App\Models\PengurusOrganisasi', 'organisasi_id', 'id');
    }

}
