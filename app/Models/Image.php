<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'enterprise_images';



    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class, 'enterprise_id', 'id');
    }

    public function typeName(){
        $typeNames = array('Apartamento / Terreno', 'Área comum', 'Banner');
        return $typeNames[$this->type];
    }


}
