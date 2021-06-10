<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class predicciones extends Model
{
    protected $table = "predicciones";
	protected $fillable =[
        'tema',
		'equipos_id',
        'votos'];
    public function equipos(){
        return $this->belongsTo('App\equipos','equipos_id');		
    }      
    
}
