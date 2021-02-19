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
        'photo',
        'pekerjaan_id',
        'path_surat_baptis',
        'path_surat_sidi'
    ];

//    need to append : usia, GR, BS, JD/DD, pendidikan, Diakonia
    protected $appends = array('photo_url', 'surat_sidi_url', 'surat_baptis_url');

    public function getPhotoUrlAttribute(): string
    {
        $file_name = $this->attributes['photo'];
        return asset("storage/user/".$file_name);
    }

    public function getSuratSidiUrlAttribute(): string
    {
        return asset("storage/".$this->attributes['path_surat_sidi']);
    }

    public function getSuratBaptisUrlAttribute(): string
    {
        return asset("storage/".$this->attributes['path_surat_baptis']);
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function jemaat()
    {
        return $this->belongsTo('App\Models\Jemaat', 'jemaat_id', 'id');
    }

    public function wilayah()
    {
        return $this->belongsTo('App\Models\Wilayah', 'wilayah_id', 'id');
    }

    public function klasis()
    {
        return $this->belongsTo('App\Models\Klasis', 'klasis_id', 'id');
    }

   public function pekerjaan()
   {
       return $this->hasOne('App\Models\Pekerjaan', 'id', 'pekerjaan_id');
   }

   public function anggota_keluarga()
   {
       return $this->belongsTo('App\Models\AnggotaKeluarga', 'id', 'user_profile_id');
   }


}
