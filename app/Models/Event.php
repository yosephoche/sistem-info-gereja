<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "location", "start_date", "end_date", "description", "created_by", "address"
    ];

    protected $appends = array('day', 'month', 'time', 'custom_start_date', 'custom_end_date');

    public function setStartDateAttribute($value)
    {
        // dd(Carbon::parse($value)->format('Y-m-d H:i:s'));
        $this->attributes['start_date'] = Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    public function getCustomStartDateAttribute($value)
    {
        $event_date = Carbon::parse($value);
        return $event_date->locale('id')->format('j F, Y - h:i a');
    }

    public function getCustomEndDateAttribute($value)
    {
        $event_date = Carbon::parse($value);
        return $event_date->locale('id')->format('j F, Y - h:i a');
    }

    public function getDayAttribute()
    {
        $event_date = Carbon::parse($this->start_date);
        return $event_date->locale('id')->day;
    }

    public function getMonthAttribute()
    {
        $event_date = Carbon::parse($this->start_date);
        return $event_date->locale('id')->shortMonthName;
    }

    public function getTimeAttribute()
    {
        $event_date = Carbon::parse($this->start_date);
        return $event_date->locale('id')->format('h:i: A');;
    }

    public function peserta()
    {
        return $this->hasMany('App\PesertaEvent', 'event_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'created_by', 'id');
    }
}
