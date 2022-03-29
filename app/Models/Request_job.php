<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request_job extends Model
{
    use HasFactory;
    protected $fillable = ['name','gender','email','address','phone','dob','status','study','cv','job_id'];


    public function img()
    {
        return $this->morphOne(Media::class, 'object', 'object_type', 'object_id', 'id')->where('type' ,'cover');
    }

    public function images()
    {
        return $this->morphMany(Media::class, 'object', 'object_type', 'object_id', 'id');
    }

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
}


