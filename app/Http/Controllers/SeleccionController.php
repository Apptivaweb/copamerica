<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\equipos;
use App\noticias;
use App\jugadores;

class SeleccionController extends Controller
{
    public function seleccion($equipo){
        $equipo=equipos::where("slug",$equipo)->first();
        $equipos=equipos::all();
        $noticias=noticias::where("id","5")->get();
        return view("front.seleccion.seleccion",compact("equipo","equipos","noticias"));
    }
    public function jugador($equipo,$jugador){
        $jugador=jugadores::where("slug",$jugador)->first();
        $jugador->increment("visitas");
        return view("front.seleccion.jugador",compact("jugador"));
    }
}
