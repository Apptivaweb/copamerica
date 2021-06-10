<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\calendarios;
use App\equipos;
use Carbon\Carbon;

class CalendariosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $calendarios = calendarios::all();
        return view("admin.calendarios.index", compact('calendarios'));
    }

    public function show($id){
        $calendarios = calendarios::find($id);
        return view('admin.calendarios.show')->with('calendarios', $calendarios);
    }

    public function create(){
        $equipos = equipos::orderBy('nombre','ASC')->pluck('nombre','id');
        return view('admin.calendarios.create', compact("equipos"));
    }

    public function store(Request $request){
        try{
            $calendario=new calendarios($request->all());
            if ($request->hasFile('urlfoto')):
                $urlfoto        = $request->file('urlfoto');                
                $nombreurlfoto   =  $request->file('urlfoto')->getClientOriginalName();
                $ruta=public_path('/img/calendarios/'.$nombreurlfoto);
                copy($urlfoto->getRealPath(),$ruta);
                $imagen->urlfoto  =   $nombreurlfoto;
            endif;  
            if ($request->hasFile('urlfoto2')):
                $urlfoto2        = $request->file('urlfoto2');                
                $nombreurlfoto2  =  $request->file('urlfoto2')->getClientOriginalName();
                $ruta=public_path('/img/calendarios/'.$nombreurlfoto2);
                copy($urlfoto2->getRealPath(),$ruta);
                $imagen->urlfoto2  =   $nombreurlfoto2;
            endif;            

            $calendario->save();
            return redirect()->route('admin.calendarios.index');
        }
        catch(Exception $e){
            return "Fatal error".$e->getMessage();
        }
    }

    public function update(Request $request,$id){
        $calendario =calendarios::findOrFail($id);
        $calendario->fill($request->all());
        if ($request->hasFile('urlfoto')):
            $urlfoto = $request->file('urlfoto');
            $nombreurlfoto   =  $request->file('urlfoto')->getClientOriginalName();
            $ruta=public_path('/img/calendarios/'.$nombreurlfoto);
            copy($urlfoto->getRealPath(),$ruta); 
            $rutaAnterior = public_path("/img/calendarios/".$calendario->urlfoto);
            if (file_exists($rutaAnterior))
                 unlink (realpath($rutaAnterior));            
            $calendario->urlfoto  =   $nombreurlfoto;
        endif;
        if ($request->hasFile('urlfoto2')):
            $urlfoto2 = $request->file('urlfoto2');
            $nombreurlfoto2   =  $request->file('urlfoto2')->getClientOriginalName();
            $ruta=public_path('/img/calendarios/'.$nombreurlfoto2);
            copy($urlfoto2->getRealPath(),$ruta); 
            $rutaAnterior = public_path("/img/calendarios/".$calendario->urlfoto2);
            if (file_exists($rutaAnterior))
                 unlink (realpath($rutaAnterior));            
            $calendario->urlfoto2  =   $nombreurlfoto2;
        endif;
        
        $calendario->fecha  =   Carbon::createFromFormat('Y-m-d', $request->fecha)->toDateString();

        $calendario->save();
        //Flash::warning("La calendario".$calendario->nombre.' ha sido editada con éxito');
        return redirect()->route('admin.calendarios.index');
    }

    public function edit($id){ 
        $equipos = equipos::orderBy('nombre','ASC')->pluck('nombre','id');       
        $calendario=calendarios::findOrFail($id);
        return view('admin.calendarios.edit',compact('calendario','equipos'));

    }

    public function destroy($id){
        try{
            $calendario=calendarios::findOrFail($id);
            $rutaAnterior = public_path("/img/calendarios/".$calendario->urlfoto);
            if (file_exists($rutaAnterior))
                 unlink (realpath($rutaAnterior));     
            $calendario->delete();
            return redirect()->route('admin.calendarios.index');

        }catch(Exception $e){

            return "FATAL ERROR".$e->getMessage();

        }
    }   
}  