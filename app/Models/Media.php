<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = ['object_type','object_id','url_image','url_video','url_images','type'];

    public function object()
          {
           return $this->morphTo();
       }
}
