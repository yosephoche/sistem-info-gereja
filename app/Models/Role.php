<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const SUPERADMIN = 'superadmin';
    const ADMIN = 'admin';
    const PENGURUS_OIG = 'pengurus';
    const PENGURUS_OIG_KLASIS = 'pengurus_oig_klasis';

    protected $fillable = [
        'name',
    ];
}
