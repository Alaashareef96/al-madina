<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Product extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable = ['name','details','calories','fats','protein','carbohydrate','vitamin','price'];
    public $translatable = ['name','details'];
//
//    public function SubCategory()
//    {
//        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
//    }

    public function image()
    {
        return $this->morphOne(Media::class, 'object', 'object_type', 'object_id', 'id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
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
