<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;
use App\categorias;
use App\equipos;
use App\calendarios;
use App\Fcm_token;

use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\OptionsPriorities;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use FCM;

use Response;

class JsonController extends Controller{
    public function index(){
        $noticias =  noticias::orderBy("created_at","desc")->limit(15)->get();
        $categorias =  categorias::all();
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
       
        return Response::json(
            array(
                'success'           => true,
                'message'           => "Actualizado", 
                'listaNoticias'     => $array, 
                'listaCategorias'   => $categorias,                
                ),200); 
    }
    public function fixture(){
        $equipos=equipos::all();
        $array = [];
        foreach($equipos as $r) {
          $id             =   $r->id;
      
          $nombre           =   $r->nombre;          
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

        



        $calendarios=calendarios::all();
        return Response::json(
            array(
                'success'           => true,
                'message'           => "Fixture actualizado", 
                'listaEquipos'      => $array, 
                'listaCalendarios'  => $calendarios,                
                ),200); 
    }

    public function flutterfixture(){
      $equipos=equipos::all();        
      return Response::json(
           $equipos,200);  
    }

    public function fcm_token(Request $request){
        $mensaje=array('success' =>1, 'message' => 'NO INSERTADO' ); // error
        
        if(!empty($request->fcm_token)):
            $fcm                =   new Fcm_token();
            $fcm->fcm_token     =   $request->fcm_token;        
            $fcm->save();
            $mensaje            =   array('success' =>0, 'message' => 'INSERTADO' );// se almacenó
        endif;
        return Response::json($mensaje,200);

    }

    public function notificacion($id){       
        $noticias=noticias::where("id","=",$id)->first();
        $tokens = Fcm_token::pluck('fcm_token')->toArray();
        $optionBuilder = new OptionsBuilder();
        $optionBuilder->setTimeToLive(60*20);
        $notificationBuilder = new PayloadNotificationBuilder();
        //$notificationBuilder->setBody($noticias->metadescription)->setSound('default'); uso EN BAKCGROUND DE LA APP
        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData(
                            [  'id'         =>  $noticias->id,
                               'title'      =>  $noticias->metatitle,
                               'message'    =>  $noticias->metadescription,
                               'subtitle'   =>  'COPA AMÉRICA 2019',
                               'tickerText' =>  'Canal de noticias de la Copa América Brasil 2019',
                               'vibrate'    =>  1,
                               'sound'      =>  1,
                               'largeIcon'  =>  'large_icon',
                               'smallIcon'  =>  'small_icon',
                               'urlfoto'    =>  $noticias->urlfoto,
                               'tipo'       =>  "Noticias"  // Noticias : Minuto : 
                               ]
                            );
        $option = $optionBuilder->build();
        $notification = $notificationBuilder->build();
        $data = $dataBuilder->build();       
        $downstreamResponse = FCM::sendTo($tokens, $option, $notification,$data);       
        return Response::json(
            array(
                'status'    =>  '1', 
                'sucess'    =>  $downstreamResponse->numberSuccess(),
                'fail'      =>  $downstreamResponse->numberFailure(), 
                'msg'       =>  $downstreamResponse->tokensWithError()
            ), 200
        );       
        //$downstreamResponse->tokensToDelete(); 
    }
}