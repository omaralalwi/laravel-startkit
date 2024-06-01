<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class MenueItems extends Model
{
    use HasFactory, HasTranslations, Sluggable;

    public $translatable = ['title'];

    public $fillable = ['menu_id', 'slug', 'title', 'url', 'icon_class', 'parent_id', 'order', 'route'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
