<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'status',
        'is_baptis',
        'is_sidi',
        'jemaat_id',
        'klasis_id',
        'wilayah_id',
        'photo'
    ];

    protected $appends = array('photo_url');

    public function getPhotoUrlAttribute()
    {
        $file_name = $this->attributes['photo'];
        return asset("storage/user/".$file_name);
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function jemaat()
    {
        return $this->belongsTo('App\Models\Jemaat', 'jemaat_id', 'id');
    }

}
