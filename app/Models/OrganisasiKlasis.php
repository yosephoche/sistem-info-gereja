<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganisasiKlasis extends Model
{
    use HasFactory;

    protected $table = 'organisasi_klasis';

    protected $fillable = [
        'name', 'klasis_id', 'description', 'status'
    ];

    public function pengurus()
    {
        return $this->hasOne('App\Models\PengurusOrganisasiKlasis', 'organisasi_klasis_id', 'id');
    }
}
