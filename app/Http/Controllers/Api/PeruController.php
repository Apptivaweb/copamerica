<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\equipos;
use App\jugadores;
use App\noticias;
use App\calendarios;
use App\categorias;


class PeruController extends Controller
{
    public function listaequipos(){
        $equipos=equipos::where("id","9")->get();
        $array = [];
        foreach($equipos as $r) {
          $id             =   $r->id;      
          $nombre         =   $r->nombre;          
          $descripcion    =   html_entity_decode(strip_tags($r->descripcion));
          $metatitle      =   $r->metatitle;
          $metadescription=   $r->metadescription;
          $metakeywords   =   $r->metakeywords;
          $urlfoto        =   $r->urlfoto;//(!empty($r->urlfoto)) ? $r->urlfoto : "foto.jpg" ;          
        
          $visitas        =   $r->visitas;          
          $votos          =   $r->votos;          
          $pj       =$r->pj;
          $pg       =$r->pg;
          $pe       =$r->pe;
          $pp       =$r->pp;
          $gf       =$r->gf;
          $gc       =$r->gc;
          $pts      =$r->pts;
          $gd       =$r->gd;
          $grupo    =$r->grupo;
          $updated_at         =    (!empty($r->updated_at)) ? $r->updated_at->format('Y-m-d H:m:s') :"" ;
         

          $array[] = [
            'id'=>$id,
        
            'nombre'=>$nombre,
            'descripcion'=>$descripcion,
            'metatitle'=>$metatitle,
            'metadescription'=>$metadescription,
            'metakeywords'=>$metakeywords,
            'urlfoto'=>$urlfoto,
           
            'visitas'=>$visitas,
            'votos'=>$votos,
            'pj'=>$pj,
            'pg'=>$pg,
            'pe'=>$pe,
            'pp'=>$pp,
            'gf'=>$gf,
            'gc'=>$gc,
            'pts'=>$pts,
            'gd'=>$gd,
            'grupo'=>$grupo,
            'updated_at'=>$updated_at,
          ];
        }

        
        return response()->json($array, 200);
    }    

    public function listajugadores(){
        $jugadores=jugadores::all();
        return response()->json($jugadores, 200);
    }

    public function listanoticias(){
        $noticias=noticias::all();
        $array = [];
        foreach($noticias as $r) {
          $id             =   $r->id;
          $slug           =   $r->slug;
          $titulo         =   $r->titulo;
          $descripcion    =   html_entity_decode(strip_tags($r->descripcion));          
          $descripcion2   =   html_entity_decode(strip_tags($r->descripcion2));          
          $urlfoto        =   $r->urlfoto;          
          $urlvideo       =   $r->urlvideo;
          $link           =   (!empty($r->link)) ? $r->link : "" ;
          $visitas        =   $r->visitas;          
          $categorias_id  =   $r->categorias_id;          
          $updated_at         =   $r->updated_at->format('Y-m-d H:m:s');
          $created_at         =   $r->created_at->format('Y-m-d H:m:s');

          $array[] = [
              'id'=>$id, 
              'slug'=>$slug,
              'titulo'=>$titulo,
              'descripcion'=>$descripcion,
              'descripcion2'=>$descripcion2,             
              'urlfoto'=>$urlfoto,              
              'urlvideo'=>$urlvideo, 
              'link'=>$link, 
              'visitas'=>$visitas,
              'categorias_id'=>$categorias_id,              
              'updated_at'=>$updated_at,
              'created_at'=>$created_at
          ];
        }
        return response()->json($array, 200);
    }

    public function listacalendarios(){
        $calendarios=calendarios::all();
        return response()->json($calendarios, 200);
    }

    public function listacategorias(){
        $categorias=categorias::all();
        return response()->json($categorias, 200);
    }
}
