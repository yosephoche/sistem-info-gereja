<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_profile", "event_id", "description"
    ];

    public function event()
    {
        return $this->belongsTo('App\Event', 'event_id', 'id');
    }

    public function profile()
    {
        return $this->hasOne('App\Models\UserProfile', 'id', 'user_profile');
    }
}
