<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Offer extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable = ['name','details','terms','subscription','expiry_date'];
    public $translatable = ['name','details','terms','subscription'];

    public function img()
    {
        return $this->morphOne(Media::class, 'object', 'object_type', 'object_id', 'id')->where('type' ,'cover');
    }

    public function images()
    {
        return $this->morphMany(Media::class, 'object', 'object_type', 'object_id', 'id');
    }
}
