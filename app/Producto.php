<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
	protected $table="productos";

	protected $fillable=['nomProducto',	'codProducto',	'precioCosto	precioVenta','	stockProducto',	'descripcionProducto',	'id'];


public function categorias(){
	return $this->belongTo('App\Categoria','id');
}



}
