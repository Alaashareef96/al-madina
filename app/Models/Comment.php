<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Comment extends Model
{
    use HasFactory;
//    use HasTranslations;
    protected $fillable = ['name','email','comment','status','news_id'];
//    public $translatable = ['name','comment'];

    public function news()
    {
        return $this->belongsTo(news::class, 'news_id', 'id');
    }
    public function img()
    {
        return $this->morphOne(Media::class, 'object', 'object_type', 'object_id', 'id')->where('type' ,'cover');
    }
    public function scopeActive($query){
        return $query->where('status',1) ;
    }


//    public function setStatusAttribute($value) {
//        $this->attributes['status'] = $value ? 1 : 0;
//    }

}
