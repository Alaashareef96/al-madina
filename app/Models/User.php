<?php

namespace App\Models;

use App\Notifications\ResetPasswordNotification;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Password;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Cache;


class User extends Authenticatable implements MustVerifyEmail, CanResetPassword
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'mobile',
        'dob',
        'last_seen',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function UserOnline(){
        return Cache::has('user-is-online' . $this->id);
    }


    public function products()
    {
        return $this -> belongsToMany(Product::class,'wishlists');
    }
    public function wishlistHas($id)
    {
        return self::products()->where('product_id', $id)->exists();
    }
    public function sendPasswordResetNotification($token) {
//        dd($this->email);
//      return route('site.password.reset.user',$token);
        $this->notify(new ResetPasswordNotification($token,$this->email));
    }

}
