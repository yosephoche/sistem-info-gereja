<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengurusOrganisasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'organisasi_id', 'jabatan', 'status'
    ];

    public function organisasi()
    {
        return $this->belongsTo('App\Models\Organisasi', 'organisasi_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
