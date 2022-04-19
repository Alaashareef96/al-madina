<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Product extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable = ['name','details','calories','fats','protein','carbohydrate','vitamin','price','brand_id','size_id','taste_id'];
    public $translatable = ['name','details'];


    public function image()
    {
        return $this->morphOne(Media::class, 'object', 'object_type', 'object_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'wishlists');
    }

    public function brand()
    {
        return $this->belongsTo(Category::class, 'brand_id');
    }


    public function size()
    {
        return $this->belongsTo(Category::class, 'size_id');
    }

    public function taste()
    {
        return $this->belongsTo(Category::class, 'taste_id');
    }


//
//    public function setSubCategoryIdAttribute($value) {
//        $this->attributes['sub_category_id'] =  implode(',', $value);
//    }
//
//    public function getSubCategoryIdAttribute($value) {
//       return explode(',', $value);
//    }
//    public function subcategories(){
//        return SubCategory::whereIn('id', $this->sub_category_id)->get();
//    }


}
