<?php

namespace App\Models\Admin;

use App\Models\Market\Follower;
use App\Models\Market\Following;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $table = 'ads';
    protected $casts = ['image' => 'array'];
    protected $fillable = ['title', 'from_user_id', 'for_user_id', 'description', 'price_id', 'status', 'image'];
    public function adPrice()
    {
        return $this->belongsTo(Price::class, 'price_id');
    }

    public function forUser()
    {
        return $this->belongsTo(User::class, 'for_user_id');
    }

    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }

    public function followers()
    {
        return $this->hasMany(Follower::class, 'user_id');
    }

    public function following()
    {
        return $this->hasMany(Following::class, 'user_id');
    }

    public function followings()
    {
        return $this->belongsToMany(Following::class, 'following','following_id', 'user_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
