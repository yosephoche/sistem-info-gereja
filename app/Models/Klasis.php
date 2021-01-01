<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klasis extends Model
{
    use HasFactory;

    protected $table = 'klasis';

    protected $fillable = [
        'name',
        'wilayah_id',
    ];
}
