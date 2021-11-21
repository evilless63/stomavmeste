<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class SluggableModel extends Model
{
    use HasFactory;
    use HasSlug;

    protected function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(config('services.sluggable.naming'))
            ->saveSlugsTo(config('services.sluggable.slug'));
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
