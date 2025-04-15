<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Gallery extends Model
{
    protected $fillable = [
        'image',
    ];

    protected static function boot()
    {
        parent::boot();

        // Delete old image when updating
        static::updating(function ($gallery) {
            if ($gallery->isDirty('image')) { // Check if the image is being updated
                $oldImage = $gallery->getOriginal('image');
                if ($oldImage && Storage::exists($oldImage)) {
                    Storage::delete($oldImage);
                }
            }
        });

        // Delete image when the blog is deleted
        static::deleting(function ($gallery) {
            if ($gallery->image && Storage::exists($gallery->image)) {
                Storage::delete($gallery->image);
            }
        });
    }
}
