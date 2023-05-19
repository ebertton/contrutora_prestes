<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

/**
 * @property int $id_tags
 * @property string $titulo
 * @property string $texto
 * @property string $data_publicacao
 * @property int $id_usuarios
 * @property string $path_banner
 * @method orderBy(string $string, string $string1)
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_tags',
        'titulo',
        'texto',
        'path_banner',
        'data_publicacao',
        'id_usuarios'

    ];

    protected $appends = [
        'url_banner',
        'data_publicacao_defaut'
    ];



    public function dataPublicacao(): Attribute
    {
        return new Attribute(
            get: fn($value) => $value ? date("F j, Y", strtotime($value)) : null
        );
    }

    public function dataPublicacaoDefaut(): Attribute
    {
        return new Attribute(
            get: fn() => $this->data_publicacao ? date("Y-m-d", strtotime($this->data_publicacao)) : null
        );
    }

    public function urlBanner(): Attribute
    {
        return new Attribute(
            get: fn() => $this->path_banner ? \Storage::url($this->path_banner) : 'http://repinte.com.br/wp/wp-content/uploads/2019/02/269135-conheca-os-x-predios-mais-bonitos-do-mundo.jpg'
        );
    }


    /**
     * @return BelongsTo
     */
    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class, 'id_tags', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_usuarios', 'id');
    }


}
