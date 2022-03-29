<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = ['url'];

    public function img()
    {
        return $this->morphOne(Media::class, 'object', 'object_type', 'object_id', 'id')->where('type' ,'cover');
    }
}
