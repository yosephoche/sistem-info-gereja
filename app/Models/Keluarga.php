<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_keluarga', 'kode_kk', 'kepala_keluarga'
    ];

    public function profile_kepala_keluarga()
    {
        return $this->belongsTo(UserProfile::class, 'kepala_keluarga', 'id');
    }

    public function anggota_keluarga()
    {
        return $this->hasMany(AnggotaKeluarga::class, 'keluarga_id', 'id');
    }
}
