<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'enterprise_status';

    static public function availableStatus($enterpriseId) {
        $existStatus = [0, 1, 2, 3, 4, 5];
        $dbStatus = Status::where('enterprise_id', $enterpriseId)->get()->pluck('status')->toArray();
        return array_diff($existStatus, $dbStatus);
    }

    static public function getLabel($number) {

        $labels = array(
         'Infraestrutura'
         ,'Estrutura'
         ,'Alvenaria'
         ,'Revestimento interno'
         ,'Revestimento externo'
         ,'Acabamentos'
        );

        return $labels[$number];
    }

    static function getImg($enterpriseId, $status) {
        return Status::where('enterprise_id', $enterpriseId)->where('status', $status)->first();
    }

    static function getPercentage($enterpriseId, $status) {
        if(!empty(Status::where('enterprise_id', $enterpriseId)->where('status', $status)->first())){
            return Status::where('enterprise_id', $enterpriseId)->where('status', $status)->first()->toArray()["status_progress"];
        } else {
            return 0;
        }
    }

    static public function getViewStatus($slug) {

        $enterpriseId = Enterprise::all()->where('slug_name', $slug)->first()->id;
        if (!empty(Status::where('enterprise_id', $enterpriseId)->count())) {
            $actual = Status::where('enterprise_id', $enterpriseId)->orderBy('status', 'DESC')->first();
            $allStatus= array(
                'actualStatus' => $actual->toArray(),
                'allStatus' => []
            );
            for ($i = 0; $i <= 5; $i++) {
                array_push($allStatus['allStatus'], array(
                    'identifier' => $i,
                    'name' => Status::getLabel($i),
                    'status_progress' => Status::getPercentage($enterpriseId, $i),
                    'image' => Status::getImg($enterpriseId, $i),

                ));
            }
        return $allStatus;
        }
        else {
            return null;
        }

    }
}
