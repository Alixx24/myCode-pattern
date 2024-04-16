<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $table = 'all_price';

    public function ad()
    {
        return $this->hasMany(Price::class, 'price_id');
    }
}
