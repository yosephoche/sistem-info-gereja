<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganisasiWilayah extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'wilayah_id', 'description', 'status'
    ];

    public function pengurus()
    {
        return $this->hasOne('App\Models\PengurusOrganisasiWilayah', 'organisasi_wilayah_id', 'id');
    }
}
