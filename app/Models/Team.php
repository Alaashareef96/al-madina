<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Team extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable = ['name','category'];
    public $translatable = ['name','category'];

    
    public function image()
    {
        return $this->morphOne(Media::class, 'object', 'object_type', 'object_id', 'id');
    }

}
