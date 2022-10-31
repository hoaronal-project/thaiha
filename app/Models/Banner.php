<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getImageUrlAttribute()
    {
        if ($this->image_path) {
            return Storage::url($this->image_path);
        }

        return null;
    }
}
