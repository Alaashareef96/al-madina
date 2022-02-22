<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SubCategory extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable = ['name','category_id'];
    public $translatable = ['name'];

    public function category()
    {
        return $this->belongsTo(Category::class,   'category_id', 'id');
    }



}
