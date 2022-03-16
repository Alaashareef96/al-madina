<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Album extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable = ['name','details'];
    public $translatable = ['name','details'];

    public function images()
    {
        return $this->morphMany(Media::class, 'object', 'object_type', 'object_id', 'id');
    }
    public function video()
    {
        return $this->morphOne(Media::class, 'object', 'object_type', 'object_id', 'id')->where('type' ,'video');
    }
}
