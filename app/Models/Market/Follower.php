<?php

namespace App\Models\Market;

use App\Models\Admin\Ad;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Follower extends Model
{
    use HasFactory;
    protected $table = 'followers';

    protected $fillable = ['user_id', 'follower_id'];
    public function followers()
    {
        return $this->belongsToMany(Ad::class, 'id');
    }
}
