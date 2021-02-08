<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    const EVENT = "EVENT";
    const IBADAH = "IBADAH";
    const ORGANISASI = "ORGANISASI";
    const OTHER = "OTHER";

    protected $table = 'galeri';

    protected $fillable = [
        'file_name', 'path', 'category', 'caption'
    ];
}
