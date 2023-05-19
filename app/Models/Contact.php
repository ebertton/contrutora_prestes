<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';
    protected $appends = ['url_banner'];


    public function urlBanner(): Attribute
    {
        return new Attribute(
            get: fn() => $this->path_banner ? Storage::url($this->path_banner) : 'https://via.placeholder.com/1920x1080'
        );
    }
}
