<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = ['name','discount','qty','date','status'];



    public function getVisibilityAttribute()
    {
        return $this->status ? 'متاح' : 'غير متاح';
    }

}
