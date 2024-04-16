<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Admin\Ad;
use App\Models\Admin\Price;
use App\Models\Market\Follower;
use App\Models\Market\Following;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'about_me',
        'age',
        'links',
        'cv',
        'persian_cv',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'avatar' => 'array'
    ];

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'followers','user_id', 'follower_id');
    }

    public function followings()
    {
        return $this->belongsToMany(Following::class, 'following','user_id', 'following_id');
    }

    public function unfollowUser($userId)
    {
        $this->followings()->detach($userId);
    }

    public function following()
    {
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'user_id');
    }

    public function isFollowing($userId)
    {
        return $this->following()->where('user_id', $userId)->exists();
    }

    public function price()
    {
        return $this->hasMany(Price::class, 'price_id');
    }

    public function getFullNameAttribute()
    {
        $this->name . ' ' . $this->email;
    }
}
