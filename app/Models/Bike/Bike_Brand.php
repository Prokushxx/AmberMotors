<?php

namespace App\Models\Bike;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike_Brand extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'brand_nm',
    ];


    public function bike_details(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Bike_Detail::class);
    }
}
