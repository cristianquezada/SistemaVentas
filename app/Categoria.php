<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;


class Categoria extends Model
{

use Sluggable;

 public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'nomCategoria'
            ]
        ];
    }

    protected $table="categorias";

    protected $fillable=['nomCategoria'];

public function producto(){

	return $this->hasMany('App\Producto');
}


}
