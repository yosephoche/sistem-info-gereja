<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jemaat_id', 'pendeta_id', 'status',
    ];

    public function jemaat()
    {
        return $this->belongsTo('App\Models\Jemaat', 'jemaat_id', 'id');
    }

    public function pendeta()
    {
        return $this->belongsTo('App\Models\Pendeta', 'pendeta_id', 'id');
    }
}
