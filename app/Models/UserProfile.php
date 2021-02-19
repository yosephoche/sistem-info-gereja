<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'status_perkawninan',
        'is_baptis',
        'is_sidi',
        'jemaat_id',
        'klasis_id',
        'wilayah_id',
        'photo',
        'pekerjaan_id',
        'path_surat_baptis',
        'path_surat_sidi',
        'pendidikan_id',
        'dokumen_nikah_gereja',
        'dokumen_nikah_bs'

    ];

    protected $appends = array('usia', 'photo_url', 'surat_sidi_url', 'surat_baptis_url', 'path_doc_bs', 'path_doc_gereja');

    public function getUsiaAttribute(): string
    {
        $dateOfBirth = $this->attributes['tanggal_lahir'];
        return Carbon::parse($dateOfBirth)->age;
    }

    public function getPathDocBsAttribute(): string
    {
        $file_name = $this->attributes['dokumen_nikah_bs'];
        return asset("storage/dokumen/".$file_name);
    }

    public function getPathDocGerejaAttribute(): string
    {
        $file_name = $this->attributes['dokumen_nikah_gereja'];
        return asset("storage/dokumen/".$file_name);
    }

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

   public function pendidikan()
   {
       return $this->hasOne('App\Models\Pendidikan', 'id', 'pendidikan_id');
   }


}
