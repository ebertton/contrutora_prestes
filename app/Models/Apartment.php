<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $table = 'enterprise_apartments';

    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class, 'enterprise_id', 'id');
    }

    static public function hasSuites($enterpriseId)
    {
        return array_sum(Apartment::where('enterprise_id',$enterpriseId)->get()->pluck('suites')->toArray());
    }

    static public function getCarousel($enterpriseId) {
        $carousel = array();
        $qntDorms = array_unique(Apartment::where('enterprise_id', $enterpriseId)->pluck('dormitories')->toArray());

        foreach ($qntDorms as $i) {
            
            $carousel[$i] = Apartment::where('enterprise_id', $enterpriseId)->where('dormitories', $i)->pluck('floor_plan')->toArray();
             
        }

        return $carousel;

    }
}
