<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable = ['name','type'];
    public $translatable = ['name'];

//    public function parent(){
//        return $this->belongsTo(self::class, 'parent_id');
//    }
//
//    //get all childrens=
//    public function childrens(){
//        return $this -> hasMany(self::class,'parent_id');
//    }
//
//    public function products()
//    {
//        return $this -> belongsToMany(Product::class,'product_categories');
//    }
//
//    public function scopeMain($query){
//        return $query -> whereNull('parent_id');
//    }





}
