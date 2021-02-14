<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleGroup extends Model
{
    use HasFactory;

    const WILAYAH = 'Wilayah';
    const KLASIS = 'Klasis';
    const JEMAAT = 'Jemaat';
}
