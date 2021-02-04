<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        "title", 
        "content", 
        "image", 
        "category", 
        "author",
        "tag", 
        "is_published", 
        "meta_title",
        "slug",
        "meta_description"
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    protected $appends = array('date', 'month');

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
