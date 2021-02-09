<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupOrganisasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'short_name', 'visi', 'misi', 'sejarah'
    ];
}
