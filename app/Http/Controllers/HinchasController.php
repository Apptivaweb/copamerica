<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hinchas;
use App\Hinchasgenerados;

use Imagick;
use ImagickDraw;
class HinchasController extends Controller
{
    public function index(){
        $hinchas=Hinchas::orderBy("nombre","desc")->get();
        return view('hinchas.index', compact('hinchas'));
    }

    public function equipo($equipo){
        $hincha   = Hinchas::where("slug",$equipo)->first();
        $hinchas  = Hinchasgenerados::where("hinchas_id",$hincha->id)->get();
        return view('hinchas.equipo', compact('hincha','hinchas'));
    }
    public function equipopost(Request $request){
        $hincha     =   Hinchas::where("id",$request->id)->first();

        $ultimo_id  =   (!empty(Hinchasgenerados::all()->last()->id)) ? Hinchasgenerados::all()->last()->id+1 : 1;
        //dd($ultimo_id);
        
        $nombre     =   $request->nombre;
        $frase      =   $request->frase;
        $urlfoto    =   str_slug($nombre)."_".$ultimo_id.".jpg";

        $generado           =   new Hinchasgenerados();
        $generado->slug     =   str_slug($nombre)."_".$ultimo_id;
        $generado->nombre   =   $nombre;
        $generado->frase    =   $frase;
        $generado->urlfoto  =   $urlfoto;
        $generado->visitas  =   0;
        $generado->hinchas_id = $hincha->id;
        $generado->save();




        $im       =   new Imagick(public_path('img/hincha/'.$hincha->urlfoto2));
        $draw     =   new ImagickDraw();
        $draw->setFillColor("#000");        
        //$draw->setStrokeOpacity(1);
        //$draw->setTextUnderColor('#ff800088');
    
        $draw->setFont(public_path('fonts/impact.ttf'));
        $draw->setFontSize(22);      
        //$draw->setStrokeColor("#002200");
        //$draw->setStrokeWidth(1.5);  
        


        $info2  =   $im->queryFontMetrics($draw, $frase);        
        $d2     =   $im->getImageGeometry(); 
        $w2     =   ($d2['width']/2); 
        $draw->annotation($w2-($info2['textWidth']/2),490,$frase);


        $draw->setTextAlignment(\Imagick::ALIGN_CENTER);
        $draw->annotation(340,560,$nombre);

        $watermark = new Imagick();
        $watermark->readImage($request->urlfoto);
        $this->image_cover($watermark, 300, 400);
        $im->compositeImage($watermark, imagick::COMPOSITE_DSTOVER,50 , 150);

        $im->drawImage($draw);
        $im->setImageFormat('jpg');                        
        $im->writeImage("img/hincha/a/".$urlfoto);
        $im->clear();
        $im->destroy();  

        return redirect("/hincha/".$hincha->slug)->with(["urlfoto" => $urlfoto]);
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

}
