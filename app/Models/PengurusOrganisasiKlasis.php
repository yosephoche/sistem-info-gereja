<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengurusOrganisasiKlasis extends Model
{
    use HasFactory;

    protected $table = 'pengurus_organisasi_klasis';

    protected $fillable = [
        'user_id', 'organisasi_klasis_id', 'jabatan', 'status'
    ];

    public function organisasi_klasis()
    {
        return $this->belongsTo('App\Models\OrganisasiKlasis', 'organisasi_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
