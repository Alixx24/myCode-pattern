<?php

namespace App\Models\Market;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Following extends Model
{
    protected $table = 'following';
    use HasFactory;

    protected $fillable = ['user_id', 'following_id'];

   public function users()
   {
    return $this->belongsToMany(User::class, 'user_id', 'following_id');
   }

}
