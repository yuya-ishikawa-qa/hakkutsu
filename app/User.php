<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes; // 論理削除

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes; // 論理削除

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'name_kana',
        'postal_code',
        'address_1',
        'address_2',
        'address_3',
        'tel',
        'email',
        'password',
        'destination_postal_code',
        'destination_1',
        'destination_2',
        'destination_3',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function stores()
    {
        return $this->hasMany(Store::class);
    }

    /**
     * itemに所属する役目を取得
     */

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function reviews()
    {
        return $this -> hasMany(Review::class);
    }

    public function orders()
    {
        return $this -> hasMany(Order::class);
    }
}
