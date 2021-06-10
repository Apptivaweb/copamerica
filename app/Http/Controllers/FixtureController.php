<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\calendarios;
use App\categorias;
use App\equipos;


class FixtureController extends Controller
{
    
    public function index()
    {
        $calendarios=calendarios::all();        
        $categorias=categorias::all();
        return view("front.fixture",compact("calendarios","categorias"));
    }
    public function grupos()
    {
        $equipos=equipos::orderBy("grupo")->get();        
        $categorias=categorias::all();
        return view("front.grupos",compact("equipos","categorias"));
    }

    public function gruposletra($grupoletra)
    {
        $equipos=equipos::where("grupo",$grupoletra)->orderBy("grupo")->get();        
        $categorias=categorias::all();
        return view("front.gruposletra",compact("equipos","categorias"));
    }

    public function fasedegrupos(){
        $calendarios=calendarios::all();        
        $categorias=categorias::all();
        return view("front.fasedegrupos",compact("calendarios","categorias"));
    }

    public function cuartosdefinal(){
        $calendarios=calendarios::all();        
        $categorias=categorias::all();
        return view("front.cuartosdefinal",compact("calendarios","categorias"));
    }

    public function semifinal(){
        $calendarios=calendarios::all();        
        $categorias=categorias::all();
        return view("front.semifinal",compact("calendarios","categorias"));
    }

    public function final(){
        $calendarios=calendarios::all();        
        $categorias=categorias::all();
        return view("front.final",compact("calendarios","categorias"));
    }

    public function tablaposiciones(){
        $equipos=equipos::orderBy("pts","DES")->get();        
        return view("front.tablaposiciones",compact("equipos"));
    }

}
