<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "location", "start_date", "end_date", "description", "created_by"
    ];

    public function peserta()
    {
        return $this->hasMany('App\PesertaEvent', 'event_id', 'id');
    }
}
