<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendarios extends Model
{
    protected $table = "calendarios";
	protected $fillable =[        
        'fecha',
        'mes',
        'dia',
        'hora',
		'equipos1_id',
        'equipos2_id',
        'urlfoto',
        'urlfoto2',
        'descripcion',
        'tipo',
        'visitas'];

    public function equipos1(){
        return $this->belongsTo('App\equipos','equipos1_id');		
    }      
    public function equipos2(){
        return $this->belongsTo('App\equipos','equipos2_id');		
    }      
}
