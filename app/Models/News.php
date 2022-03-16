<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class News extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $table = "news";
    protected $fillable = ['name','details'];
    public $translatable = ['name','details'];

    public function img()
    {
        return $this->morphOne(Media::class, 'object', 'object_type', 'object_id', 'id')->where('type' ,'cover');
    }

    public function images()
    {
        return $this->morphMany(Media::class, 'object', 'object_type', 'object_id', 'id');
    }

    public function comment()
    {

        return $this->hasMany(Comment::class, 'news_id', 'id');
    }
}
