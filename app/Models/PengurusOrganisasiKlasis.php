<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengurusOrganisasiKlasis extends Model
{
    use HasFactory;

    protected $table = 'pengurus_organisasi_klasis';

    protected $fillable = [
        'user', 'organisasi_klasis_id', 'jabatan', 'status'
    ];

    public function organisasi()
    {
        return $this->belongsTo('App\Models\OrganisasiKlasis', 'organisasi_klasis_id', 'id');
    }

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
