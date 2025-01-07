<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'category_id'];

//    public static function boot()
//    {
//        parent::boot();
//
//        static::saved(function ($news) {
//            $news->update(['user_id' => auth()->id()]);
//        });
//
//    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
