<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


/**
 * @property string $path_banner
 * @property string $descricao
 * @property string $titulo
 */
class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';
    protected $fillable = [
        'titulo',
        'descricao',
        'path_banner',
        'breve_descricao',
        'created_at',
        'update_at'
    ];
    protected $appends = ['url_banner'];

    public function urlBanner(): Attribute
    {
        return new Attribute(
            get: fn() => $this->path_banner ? Storage::url($this->path_banner) : 'https://via.placeholder.com/1920x1080'
        );
    }


}
