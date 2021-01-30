<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        "",
    ];

    protected $appends = array('date', 'month', 'time', 'custom_start_date', 'custom_end_date');

    public function kategori()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'author', 'id');
    }

    public function tag_list()
    {
        return explode(',', $this->attributes['tag']);
    }

    public function getMonthAttribute()
    {
        $event_date = Carbon::parse($this->created_date);
        return $event_date->locale('id')->shortMonthName;
    }

    public function getDateAttribute()
    {
        $event_date = Carbon::parse($this->created_date);
        return $event_date->locale('id')->isoFormat('DD');
    }
}
