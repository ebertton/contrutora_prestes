<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesCenter extends Model
{
    use HasFactory;

    protected $table = 'sales_center';

    public function cities () {
        return $this->hasOne(City::class, 'id', 'city');
    }

    static public function qtdeDeEnderecos($cityId)
    {
        return SalesCenter::where('city',$cityId)->count();
    }

    static public function verificacaoMaisDeUmContato($cityId)
    {
        return SalesCenter::with('cities')->where('city', $cityId)->get();
    }
}
