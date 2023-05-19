<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;



class City extends Model
{

    
    use HasFactory;


    protected $table = 'cities';

    public function getSlugNameAttribute()
    {
        return Str::slug($this->city_name);
    }

    public function salesCenter(){
        return $this->hasOne(SalesCenter::class, 'city', 'id');
    }

    public function getCity_NameAttribute($value) {
        return $value;
    }

    public function getSalesCenter () {
        return SalesCenter::first();
    }
}
