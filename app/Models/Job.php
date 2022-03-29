<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Job extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable = ['name','terms','start_date','expiry_date','status'];
    public $translatable = ['name','terms'];


    public function setTermsAttribute($value) {
        $this->attributes['terms'] =  implode('@#', $value);
    }

    public function getTermsAttribute($value) {
        return explode('@#', $value);
    }

    public function getVisibilityAttribute()
    {
        return $this->status ? 'متاح' : 'غير متاح';
    }
}
