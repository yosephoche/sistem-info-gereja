<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodeMajelis extends Model
{
    use HasFactory;

    protected $fillable = ["tahun_mulai", "tahun_akhir", "status"];
}
