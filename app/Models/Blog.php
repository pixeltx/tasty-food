<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
    ];

    protected static function boot()
    {
        parent::boot();

        // Automatically generate slug from title
        static::saving(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->title, '-');
            }
        });

        // Delete old image when updating
        static::updating(function ($blog) {
            if ($blog->isDirty('image')) { // Check if the image is being updated
                $oldImage = $blog->getOriginal('image');
                if ($oldImage && Storage::exists($oldImage)) {
                    Storage::delete($oldImage);
                }
            }
        });

        // Delete image when the blog is deleted
        static::deleting(function ($blog) {
            if ($blog->image && Storage::exists($blog->image)) {
                Storage::delete($blog->image);
            }
        });
    }
}
