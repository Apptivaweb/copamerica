<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    protected $table = "equipos";

    public $timestamps = false;

	protected $fillable =[
        'slug',
        'title',
		'description',
		'nombre',
		'descripcion',
		'urlfoto', 
        'visitas',
		'votos',
		'pj',
		'pg',
		'pe',
		'pp',
		'gf',
		'gc',
		'pts',
		'gd',
		'grupos'
	];
}
