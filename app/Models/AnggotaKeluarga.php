<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaKeluarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_profile_id',
        'keluarga_id',
        'status_keluarga'
    ];

    public function keluarga()
    {
        return $this->hasOne('App\Models\Keluarga', 'id', 'keluarga_id');
    }

    public function profile()
    {
        return $this->hasOne('App\Models\UserProfile', 'id', 'user_profile_id');
    }
}
