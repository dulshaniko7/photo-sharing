<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumCategory extends Model
{
    protected $guarded =[];

    public  function albums(){
        return $this->hasMany(Album::class);
    }
}
