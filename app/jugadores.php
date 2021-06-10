<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jugadores extends Model
{
    protected $table = "jugadores";

    public $timestamps = false;
   
	protected $fillable =[
		'slug',
		'nombre',
		'nombrecompleto',
		'equipo',
		'fechanacimiento',
		'edad',
		'pais',
		'altura',
		'peso',
		'partidos',
		'debut',
        'posicion',
        'nombreposicion',
		'descripcion',
		'metatitle',
		'metadescription',
		'metakeywords',
		'urlfoto', 		
        'visitas',
		'votos',
		'estrellas',
		'equipos_id',
		'estado'
    ];
    public function equipos(){
		return $this->belongsTo('App\equipos');		
    }
    
}
