<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;
use Cviebrock\EloquentSluggable\Sluggable;

class MenueItems extends Model
{
    use HasFactory, Sluggable, HasTranslations;

    public $translatable = ['title'];

    public $fillable = ['menu_id','slug', 'title', 'url','icon_class','parent_id','order','route'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


}
