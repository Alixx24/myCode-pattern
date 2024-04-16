<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Description extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = ['image' => 'array'];

    protected $fillable = ['name', 'url', 'parent_id', 'status', 'position','body'];

    public function parent()
    {
        return $this->belongsTo($this, 'parent_id')->with('parent');
    }

    public static $positions = [
        0 => 'about_us',
        1 => 'contact_us',
        2 => 'points',
        3 => 'points_2',
    ];
}
