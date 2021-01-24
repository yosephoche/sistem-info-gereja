<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengurusOrganisasiWilayah extends Model
{
    use HasFactory;

    protected $fillable = [
        'user', 'organisasi_wilayah_id', 'jabatan', 'status'
    ];

    public function organisasi()
    {
        return $this->belongsTo('App\Models\OrganisasiWilayah', 'organisasi_wilayah_id', 'id');
    }
}
