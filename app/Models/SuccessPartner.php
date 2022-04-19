<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuccessPartner extends Model
{
    use HasFactory;


    public function img()
    {
        return $this->morphOne(Media::class, 'object', 'object_type', 'object_id', 'id');
    }
}