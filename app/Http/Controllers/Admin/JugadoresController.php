<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;use Intervention\Image\ImageManagerStatic as Image;
use App\equipos;
use App\jugadores;
use Goutte\Client;
use Imagick;

class JugadoresController extends Controller
{
    public function index(Request $request){
        
        $jugadores=jugadores::orderBy("nombre")->paginate();
        return view("admin.jugadores.index",compact('jugadores'));
    }
  
    public function create(){
        $equipos = equipos::orderBy('nombre','ASC')->pluck('nombre','id');
        return view("admin.jugadores.create",compact('equipos'));
    }

  
    public function store(Request $request){
        $jugador    =   new jugadores($request->all());
        if ($request->hasFile('urlfoto')):
            $urlfoto = $request->file('urlfoto');
            $nombreurlfoto = str_slug($request->nombre).time().'.'.$urlfoto->guessExtension();
            $ruta=public_path('/img/jugadores/'.$nombreurlfoto);
            Image::make($urlfoto->getRealPath())
                ->fit(200,250,function ($constraint) {
                    $constraint->upsize();
                })
                ->save($ruta);
            $jugador->urlfoto  =   $nombreurlfoto;
        endif;        
        $jugador->slug      =   str_slug($request->nombre);
        $jugador->save();
        return redirect()->route('admin.jugadores.index');  
    }

    
    public function showurl(Request $request)
    {

        $links;
        $url=$request->url;        
        $client = new Client();
        $crawler = $client->request('GET', $url);
        $crawler->filter('.lnk-figure')->each(function ($node) use(&$links) {
            if(!empty($node->attr("href"))){
                $links[]=$node->attr("href");
            }
        });
        for($x=0;$x<sizeof($links);$x++):
            $url = "https://peru.as.com".$links[$x];       
        
        $client = new Client();
        $crawler = $client->request('GET', $url);

        $slug="";
		$nombre="";
		$nombrecompleto="";
		$equipo="";
		$fechanacimiento="";
		$edad="";
		$pais="";
		$altura="";
		$peso="";
		$partidos="";
		$debut="";
        $posicion=0;
        $nombreposicion="";
		$descripcion="";
		$metatitle="";
		$metadescription="";
		$metakeywords="";
		$urlfoto="";
        $visitas=0;
		$votos=0;
		$estrellas=0;
		$equipos_id=4;
		$estado=0;

        $cadena=""; $cadena2="";

        $urlfoto="https:".$crawler->filter('span .img-max-size')->attr('src');

        $crawler->filter('.tit-ppal')->each(function ($node) use(&$nombre) {
            $nombre= $node->text();
        });
        $crawler->filter('.sub-tit')->each(function ($node)  use(&$nombrecompleto) {
            $nombrecompleto=$node->text();
        });
        $crawler->filter('.hdr-ficha-player-info-team-name')->each(function ($node)  use(&$equipo) {
            $equipo= $node->text();
        });

        $crawler->filter('.list-ball-yellow li')->each(function ($node) use(&$cadena) {
             $cadena.= $node->filter('li')->eq(0)->text()."-";            

        });

        $crawler->filter('.datos-ficha-jugador p')->each(function ($node) use(&$cadena2) {
            $cadena2.=$node->text()."-";

        });

        $img = Image::make($urlfoto);
        $urlfoto=str_slug("copa-america-".$nombre).".png";
        $img->save(public_path('img/jugadores/'.$urlfoto)); 

        list($fechanacimiento, $edad, $pais, $altura,$nombreposicion, $peso) = array_pad(explode('-', trim($cadena)), 2, null);

        $fechanacimiento=explode(":", $fechanacimiento);
        $fechanacimiento=$fechanacimiento[1];

        $edad=explode(":", $edad);
        $edad=$edad[1];

        $pais=explode(":", $pais);
        $pais=$pais[1];

        $altura=explode(":", $altura);
        $altura=$altura[1];

        $nombreposicion=explode(":", $nombreposicion);
        $nombreposicion=$nombreposicion[1];

        $peso=explode(":", $peso);
        $peso=$peso[1];

        list($partidos, $debut) = array_pad(explode('-', trim($cadena2)), 2, null);
        $partidos= explode(':', $partidos);        
        $partidos=!empty($partidos[1]) ? $partidos[1] : "0"; 

        $debut= explode(':', $debut);        
        $debut=!empty($debut[1]) ? $debut[1] : "0"; 
        
        
        

        $user=new Jugadores();
        $user->slug=str_slug($nombre);
        $user->nombre=$nombre;        
		$user->nombrecompleto=$nombrecompleto;
		$user->equipo=$equipo;
        $user->fechanacimiento=$fechanacimiento;
        
        
		$user->edad=$edad;
		$user->pais=$pais;
		$user->altura=$altura;
		$user->peso=$peso;
		$user->partidos=$partidos;
		$user->debut=$debut;
        $user->posicion=1;
        $user->nombreposicion=$nombreposicion ;
		$user->descripcion=$nombrecompleto;
		$user->metatitle=$nombrecompleto ;
		$user->metadescription=$nombrecompleto ;
		$user->metakeywords=$nombrecompleto ;
		$user->urlfoto=$urlfoto;
        $user->visitas=0;
		$user->votos=0;
		$user->estrellas=1;
		$user->equipos_id=12;
        $user->estado=0 ;
        $user->save();

    endfor;


        
        

    }

    public function edit($id)
    {
        $jugador=jugadores::whereId($id)->first();
        $equipos = equipos::orderBy('nombre','ASC')->pluck('nombre','id');
        return view("admin.jugadores.edit",compact('jugador','equipos'));
    }

    public function update(Request $request, $id)
    {       
        $jugador    =   jugadores::find($id);          
        $urlfotoanterior        =   $jugador->urlfoto;
        $jugador->fill($request->all());
        
            /////////// TRATAMIENTO IMAGEN
            if ($request->hasFile('urlfoto')){                
                $urlfoto = $request->file('urlfoto');                
                $nombre = str_slug($request->nombre).time().'.'.$urlfoto->guessExtension();
                $ruta=public_path('/img/jugadores/'.$nombre);
                Image::make($urlfoto->getRealPath())
                ->fit(200,250,function ($constraint) {
                    $constraint->upsize();
                })
                ->save($ruta);
                
                $rutaAnterior = public_path("/img/jugadores/".$urlfotoanterior);
                if (file_exists($rutaAnterior))
                {
                    unlink (realpath($rutaAnterior));
                }
                $jugador->urlfoto   =   $nombre;
            }
            ///////////// FIN IMAGEN                                  
            $jugador->slug       =   str_slug($request->nombre);
            $jugador->save();
            return redirect()->back()->withSuccessMessage("Se ha actualizado correctamente");
    }

    public function destroy($id)
    {
        $jugador=jugadores::findOrFail($id);
        $rutaAnterior = public_path("/img/jugadores/".$jugador->urlfoto);
         if (file_exists($rutaAnterior))
            unlink (realpath($rutaAnterior));
        $jugador->delete();
        return redirect()->route('admin.jugadores.index');
    }
}
