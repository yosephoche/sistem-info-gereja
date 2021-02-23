<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    use HasFactory;

    protected $fillable = ["nama", "jemaat_id"];

    public function jemaat()
    {
        return $this->belongsTo(Jemaat::class, 'jemaat_id', 'id');
    }
}
