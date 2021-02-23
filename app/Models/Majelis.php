<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Majelis extends Model
{
    use HasFactory;

    protected $table = 'majeliss';

    protected $fillable = [
        'user_profile_id',
        'periode_id',
    ];

    public function profile()
    {
        return $this->hasOne('App\Models\UserProfile', 'id', 'user_profile_id');
    }

    public function periode()
    {
        return $this->belongsTo(PeriodeMajelis::class, 'periode_id', 'id');
    }
}
