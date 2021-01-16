<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengurusOrganisasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user', 'oig', 'jabatan', 'status'
    ];

    public function organisasi()
    {
        return $this->belongsTo('App\Models\Organisasi', 'oig', 'id');
    }
}
