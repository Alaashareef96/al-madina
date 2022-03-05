<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class About extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable = ['name','details','massage','Objectives','contribution','team'];
    public $translatable = ['name','details','massage','Objectives','contribution','team'];


    public function imgVid()
    {
        return $this->morphOne(Media::class, 'object', 'object_type', 'object_id', 'id');
    }


}
