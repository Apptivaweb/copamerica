<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\calendarios;
use App\simulador;
use App\hinchas;
use App\equipos;

use Imagick;
use ImagickDraw;

class SimuladorController extends Controller
{
   
    public function index()
    {
        
        $calendarios=calendarios::where("tipo",0)->get();        
        return view("front.simulador.index",compact("calendarios"));
    }

    public function simulador()
    {
        $hinchas=hinchas::all();
        return view("front.simulador",compact("hinchas"));
    }
    public function simuladorguardar(Request $request)
    {
        if(isset($request->frase)):
            $ok=0;
            $cadena_de_frase = $request->frase;
            $cadena_buscada= array('culo','trasero','cojudo','puta','idiota','negro','concha' ,'madre','ladron','verga','gay' );
            foreach ($cadena_buscada as $value) {
                $posicion_coincidencia = strripos($cadena_de_frase, $value); 
                if ($posicion_coincidencia !== false)
                    $ok++;    
            }
            $cadena_de_frase = $request->nombre;           
            foreach ($cadena_buscada as $value) {
                $posicion_coincidencia = strripos($cadena_de_frase, $value); 
                if ($posicion_coincidencia !== false)             
                    $ok++;
            }
           
            if($ok==0):
                // ULTIMO ID
                $id_usuario =   simulador::select('id')->orderby('created_at','DESC')->first();            
                $idusuario  =   $id_usuario->id;
                // FIN ULTIMO ID
            $nombre     =   $request->nombre;
            $frase      =   $request->frase;
            if($request->eg1>$request->eg2):
                $e1         =   $request->e1;
                $e2         =   $request->e2;
                $g1         =   $request->eg1;
                $g2         =   $request->eg2;          
            else:
                $e1         =   $request->e2;
                $e2         =   $request->e1;
                $g1         =   $request->eg2;
                $g2         =   $request->eg1;          
            endif;


            $im         =   new Imagick(public_path('img/simulador-copa-america.png'));
            $draw       =   new ImagickDraw();
            $draw->setFillColor("#ffffff");
            
            
            $draw->setFont(public_path('fonts/impact.ttf'));
            $draw->setFontSize(15);
            $info1  =   $im->queryFontMetrics($draw, $nombre);
            $draw->annotation(70,293,$nombre);
            $draw->annotation(200,293,"Nº ".$idusuario);
            $draw->setTextAlignment(\Imagick::ALIGN_CENTER);

            $draw->setStrokeColor("#000000");
            $draw->setStrokeWidth(2);
            $draw->setFontSize(25);
            $info1  =   $im->queryFontMetrics($draw, $frase);
            $d = $im->getImageGeometry(); 
            $w = ($d['width']/2); 
            $draw->annotation($w-($info1['textWidth']/2), 345, $frase);

            $draw->setTextAlignment(\Imagick::ALIGN_CENTER);
            $draw->setFontSize(30);
            $draw->annotation(420, 150, $e1." : ".$g1);            
            $draw->annotation(420, 240, $e2." : ".$g2);
            $draw->setTextAlignment(\Imagick::ALIGN_CENTER);



            if ($request->hasFile('urlfoto')) {
                $watermark = new Imagick();
                $watermark->readImage($request->urlfoto);
                $this->image_cover($watermark, 200, 250);
                $im->compositeImage($watermark, imagick::COMPOSITE_DSTOVER,25 , 45);
            }


            $im->drawImage($draw);
            $im->setImageFormat('jpg');                        
            $im->writeImage("img/simulador/".str_slug($nombre."-".$idusuario).".jpg");
            $im->clear();
            $im->destroy();  
            //echo "https://copaamerica2019.app/img/simulador/".str_slug($nombre."-".$idusuario).".jpg";
            // guardar en la tabla simulador
            
            $s              =   new simulador();
            $s->nombre      =   $nombre;
            $s->frase       =   $frase;
            $s->equipoa     =   $e1;
            $s->equipob     =   $e2;
            $s->g1          =   $g1;
            $s->g2          =   $g2;
            $s->slug        =   "hincha-nro-".$idusuario."-".str_slug($nombre);
            $s->urlfoto     =   str_slug($nombre."-".$idusuario).".jpg";
            $s->visitas     =   1;
            $s->save();
            return redirect('/cards/'.$s->slug);
            endif;
        else:
            return redirect('/');
        endif;
    }


    public function supersimulador()
    {
        $hinchas=hinchas::all();
        $equipos=equipos::orderBy("pts","desc")->get();       
        return view("front.supersimulador",compact("equipos","hinchas"));
    }
   

  
    public function nombre($id)
    {        
        $calendario=calendarios::where("id",$id)->first();
        $calendario->increment("visitas");
       
        return view("front.simulador.nombre", compact("calendario"));
    }

    public function guardar(Request $request){
        $c=calendarios::where("id",$request->id)->first();
          // ULTIMO ID
          $id_usuario =   simulador::select('id')->orderby('created_at','DESC')->first();            
          $idusuario  =   $id_usuario->id;
          // FIN ULTIMO ID

        $nombre     =   $request->nombre;
        $frase      =   trim($request->frase);
        $e1         =   $c->equipos1->nombre;
        $e2         =   $c->equipos2->nombre;
        $g1         =   $request->g1;
        $g2         =   $request->g2;

        $im         =   new Imagick(public_path('img/calendarios/'.$c->urlfoto));
        $draw       =   new ImagickDraw();
        $draw->setFillColor("#FFFFFF");        
        //$draw->setStrokeOpacity(1);
        //$draw->setTextUnderColor('#ff800088');
       

        $draw->setFont(public_path('fonts/roboto.ttf'));
        $draw->setFontSize(15);
        $info1  =   $im->queryFontMetrics($draw, $nombre);        
        $d = $im->getImageGeometry(); 
        $w = ($d['width']/2); 
        $draw->annotation($w-($info1['textWidth']/2),215,$nombre);

        $draw->setFont(public_path('fonts/impact.ttf'));
        $draw->setFontSize(22);
        $info2  =   $im->queryFontMetrics($draw, $frase);        
        $d2     =   $im->getImageGeometry(); 
        $w2     =   ($d2['width']/2); 
        $draw->annotation($w2-($info2['textWidth']/2),278,$frase);

        //$draw->setTextAlignment(\Imagick::ALIGN_CENTER);
        $draw->setStrokeColor("#000000");
        $draw->setStrokeWidth(2.5);        
        $draw->setFontSize(40);
        $draw->annotation(275, 335, $g1);
        $draw->annotation(390, 335, $g2);

        $watermark = new Imagick();
        $watermark->readImage($request->urlfoto);
        $this->image_cover($watermark, 200, 200);
        $im->compositeImage($watermark, imagick::COMPOSITE_DSTOVER,245 , 55);

        $im->drawImage($draw);
        $im->setImageFormat('jpg');                        
        $im->writeImage("img/simulador/".str_slug($nombre."-".$idusuario).".jpg");
        $im->clear();
        $im->destroy();  
        // guardar en la tabla simulador
       

        $s              =   new simulador();            
        $s->nombre      =   $nombre;
        $s->frase       =   $frase;
        $s->equipoa     =   $e1;
        $s->equipob     =   $e2;
        $s->g1          =   $g1;
        $s->g2          =   $g2;
        $s->slug        =   "hincha-nro-".$idusuario."-".str_slug($nombre);
        $s->urlfoto     =   str_slug($nombre."-".$idusuario).".jpg";
        $s->visitas     =   1;
        $s->save();
        //echo "https://copaamerica2019.app/img/simulador/".$s->urlfoto;
        return redirect('/cards/'.$s->slug);
    }

    protected function image_cover(Imagick $image, $width, $height) {
        $ratio = $width / $height;
      
        // Original image dimensions.
        $old_width = $image->getImageWidth();
        $old_height = $image->getImageHeight();
        $old_ratio = $old_width / $old_height;
      
        // Determine new image dimensions to scale to.
        // Also determine cropping coordinates.
        if ($ratio > $old_ratio) {
          $new_width = $width;
          $new_height = $width / $old_width * $old_height;
          $crop_x = 0;
          $crop_y = intval(($new_height - $height) / 2);
        }
        else {
          $new_width = $height / $old_height * $old_width;
          $new_height = $height;
          $crop_x = intval(($new_width - $width) / 2);
          $crop_y = 0;
        }
      
        // Scale image to fit minimal of provided dimensions.
        $image->resizeImage($new_width, $new_height, imagick::FILTER_LANCZOS, 0.9, true);
      
        // Now crop image to exactly fit provided dimensions.
        $image->cropImage($new_width, $new_height, $crop_x, $crop_y);
      }
    
    public function prediccion($slug){
        $cards  =   simulador::orderBy("id","DESC")->limit(20)->get();
        $card   =   simulador::where("slug",$slug)->first();
        if(!empty($card)):
            $calendarios=calendarios::limit(12)->get();
            $card->increment("visitas");
            return view("front.simulador.card", compact("card","calendarios","cards"));
        else:
            return redirect('/');
        endif;
    }
    public function ajaxgenera(Request $request){
        if(isset($request->nombre)):
            $fecha  =   date("Y-m-d");
            $nombre =   "prediccion-".time(). '.jpg';
            $ruta       =   public_path('/img/generados/'.$nombre);
            $img        =   $request->data;
            $img        =   str_replace('data:image/jpeg;base64,', '', $img);
            $img        =   str_replace(' ', '+', $img);
            $data       =   base64_decode($img);            
            $success    =   file_put_contents($ruta, $data);          
            
            return response()
                ->json([    
                    'slug'          =>  $nombre,
                    'success'       =>  0
                ]);
        else:
            return response()
                ->json([                    
                    'success'       =>  1
                ]);
        endif;        
    }

}
