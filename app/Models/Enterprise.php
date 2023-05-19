<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;


class Enterprise extends Model
{
    use HasFactory, Searchable;

    protected $table = 'enterprises';

    public function getSlugNameAttribute()
    {
        return Str::slug($this->name);
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'enterprise_id', 'id');
    }

    public function status()
    {
        return $this->hasMany(Status::class, 'enterprise_id', 'id');
    }

    public function benefit()
    {
        return $this->hasMany(Benefit::class, 'enterprise_id', 'id');
    }

    public function apartments()
    {
        return $this->hasMany(Apartment::class, 'enterprise_id', 'id');
    }
    public function lands()
    {
        return $this->hasMany(Land::class, 'enterprise_id', 'id');
    }

    public function salesCenter(){
        $saleCenter = $this->hasOne(SalesCenter::class, 'city', 'city');
        return (empty($saleCenter)) ? SalesCenter::first() : $saleCenter;
    }

    static public function tirarAcentos($string)
    {
        return str_replace(' ','',preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $string));
    }

    public function toSearchableArray(): array
    {
        return [
            'name' => $this->name,
            'describe' => $this->describe,
            'describe_title' => $this->describe_title,
        ];
    }

    public function cities () {
        return $this->hasOne(City::class, 'id', 'city');
    }

    static public function pegaNome($id)
    {
        $cidade = City::find($id);
        return $cidade->city_name;
    }

    public function getSalesCenter () {
        return SalesCenter::first();
    }

    public function getBanners () {
        return $this->with(['images', 'apartments'])
            ->whereHas('images', function ($q) {
            $q->where('type', 2)->where('enterprise_id', $this->id);
        })->get();
    }
}
