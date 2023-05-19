<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

/**
 * @property string $descricao
 * @method orderBy(string $string, string $string1)
 */
class Tag extends Model
{

    use HasFactory;
    protected $table = 'tags';
    protected $fillable = [
        'descricao'
    ];

    /**
     * @return HasMany
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class,'id_tags','id');
    }
}
