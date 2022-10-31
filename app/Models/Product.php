<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = [];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getImageUrlAttribute()
    {
        if ($this->image_path) {
            return Storage::url($this->image_path);
        }

        return null;
    }
}
