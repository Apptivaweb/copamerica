@extends('layouts.app')
@section('title')Simulador Online de la Copa América 2020, genera tus predicciones online @endsection
@section('description')Calculadora de la Copa América, crea o genera tu predicciones de los partidos desde los grupos hasta la final para compartir en Facebook, WhatsApp, Twitter @endsection
@section('url'){{url('/simulador') }} @endsection
@section('image'){{url('/img/simulador-copa.jpg') }} @endsection
@section('content')
<div class="container bg-white">
<style>
label{
    font-size: 12px !important;
    line-height: 3em;
}</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="row">
    <div class="col-sm-12">
        <h1 class="h4 text-center mt-3 mb-4">SIMULADOR COPA AMÉRICA</h1>

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- copaamerica-horizontal -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9471603402378632"
     data-ad-slot="4417935272"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

        <p class="text-center">Genera tus predicciones y compártelo con tus amigos ó crea una cuenta para guardar todas tus predicciones y combinaciones con la calculadora para los partidos de la Copa América 2020</p>
        <div class="jumbotron text-center">
            <a href="/simulador-copa" class="btn btn-danger">Arma tu cartilla</a>
        </div>
        <div class="row">
            <div class="col-sm-12 bg-primary text-center text-white">
                <h2>GRUPO A</h2>            
            </div>
            <div class="col-sm-6">
                <h3 class="text-center">PARTIDOS EL GRUPO A</h3>
                <form action="">
                <div class="form-group row">
                    <label class="col-3 col-form-label col-form-label-sm text-right">ARGENTINA</label>
                    <div class="col p-0"><input type="text" id="ar_1" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>
                    <div class="col p-0"><input type="text" id="ch_1" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 col-form-label col-form-label-sm text-left">CHILE</label>
                </div>
        
                <div class="form-group row">
                    <label class="col-3 col-form-label col-form-label-sm text-right">AUSTRALIA</label>
                    <div class="col p-0"><input type="text" placeholder="0"  required class="form-control form-control-sm text-center" id="au_1"></div>
                    <div class="col text-center">VS</div>
                    <div class="col p-0"><input type="text" placeholder="0"  required class="form-control form-control-sm text-center" id="ur_1"></div>
                    <label class="col-3 col-form-label col-form-label-sm text-left">URUGUAY</label>
                </div>
                
                <div class="form-group row">
                    <label class="col-3 col-form-label col-form-label-sm text-right">PARAGUAY</label>
                    <div class="col p-0"><input type="text" id="pa_1" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>
                    <div class="col p-0"><input type="text" id="bo_1" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 col-form-label col-form-label-sm text-left">BOLIVIA</label>
                </div>
        
        
        
                <div class="form-group row">
                    <label class="col-3 col-form-label col-form-label-sm text-right">ARGENTINA</label>
                    <div class="col p-0"><input type="text" id="ar_2" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>
                    <div class="col p-0"><input type="text" id="ur_2" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 col-form-label col-form-label-sm text-left">URUGUAY</label>
                </div>
        
                <div class="form-group row">
                    <label class="col-3 col-form-label col-form-label-sm text-right">CHILE</label>
                    <div class="col p-0"><input type="text" id="ch_2" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="bo_2" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 col-form-label col-form-label-sm text-left">BOLIVIA</label>
                </div>
        
                <div class="form-group row">
                    <label class="col-3 col-form-label col-form-label-sm text-right">PARAGUAY</label>
                    <div class="col p-0"><input type="text" id="pa_2" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="au_2" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 col-form-label col-form-label-sm text-left">AUSTRALIA</label>
                </div>
        
        
        
        
        
                <div class="form-group row">
                    <label class="col-3 col-form-label col-form-label-sm text-right">ARGENTINA</label>
                    <div class="col p-0"><input type="text" id="ar_3" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="pa_3" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 col-form-label col-form-label-sm text-left">PARAGUAY</label>
                </div>
                <div class="form-group row">
                    <label class="col-3 col-form-label col-form-label-sm text-right">URUGUAY</label>
                    <div class="col p-0"><input type="text" id="ur_3" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="ch_3" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 col-form-label col-form-label-sm text-left">CHILE</label>
                </div>
                <div class="form-group row">
                    <label class="col-3 col-form-label col-form-label-sm text-right">AUSTRALIA</label>
                    <div class="col p-0"><input type="text" id="au_3" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="bo_3" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 col-form-label col-form-label-sm text-left">BOLIVIA</label>
                </div>
        
        
        
        
        
                <div class="form-group row">
                    <label class="col-3 col-form-label col-form-label-sm text-right">CHILE</label>
                    <div class="col p-0"><input type="text" id="ch_4" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="pa_4" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 col-form-label col-form-label-sm text-left">PARAGUAY</label>
                </div>
                <div class="form-group row">
                    <label class="col-3 col-form-label col-form-label-sm text-right">AUSTRALIA</label>
                    <div class="col p-0"><input type="text" id="au_4" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="ar_4" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 col-form-label col-form-label-sm text-left">ARGENTINA</label>
                </div>
                <div class="form-group row">
                    <label class="col-3 col-form-label col-form-label-sm text-right">BOLIVIA</label>
                    <div class="col p-0"><input type="text" id="bo_4" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="ur_4" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 col-form-label col-form-label-sm text-left">URUGUAY</label>
                </div>
        
        
        
        
                <div class="form-group row">
                    <label class="col-3 col-form-label col-form-label-sm text-right">BOLIVIA</label>
                    <div class="col p-0"><input type="text" id="bo_5" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="ar_5" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 col-form-label col-form-label-sm text-left">ARGENTINA</label>
                </div>
                <div class="form-group row">
                    <label class="col-3 col-form-label col-form-label-sm text-right">CHILE</label>
                    <div class="col p-0"><input type="text" id="ch_5" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="au_5" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 col-form-label col-form-label-sm text-left">AUSTRALIA</label>
                </div>
                <div class="form-group row">
                    <label class="col-3 col-form-label col-form-label-sm text-right">URUGUAY</label>
                    <div class="col p-0"><input type="text" id="ur_5" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="pa_5" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 col-form-label col-form-label-sm text-left">PARAGUAY</label>
                </div>
        
               
                </form>                       
            </div>
           
            <div class="col-sm-6">
                <h3 class="text-center">TABLA DE POSICIONES DINÁMICA</h3>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-bordered w-100 text-center">
                            <thead class="bg-success text-white">
                            <th>POSICIONES</th><th>PJ</th><th>PG</th><th>PE</th><th>PP</th><th>GF</th><th>GC</th><th>PTS</th><th>GD</th>
                            </thead>
                            <tbody id="equipoa">      
                                <tr>
                                    <td class="bg-success text-white"><b>ARGENTINA</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white"><b>AUSTRALIA</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                                </tr>                       
                                <tr>
                                    <td class="bg-success text-white"><b>BOLIVIA</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white"><b>URUGUAY</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white"><b>CHILE</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white"><b>PARAGUAY</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                                </tr>  
                                                
                            </tbody>
                        </table> 
                    </div> 
                    <div class="col-sm-12">
                        <h2>Descarga tus predicciones para la Copa América 2020</h2>
                        <p>Pronto podrás descargar tus predicciones en PDF un link</p>
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- appcopaamerica_sidebar-right-1_AdSense1_1x1_as -->
                        <ins class="adsbygoogle"
                            style="display:block"
                            data-ad-client="ca-pub-9471603402378632"
                            data-ad-slot="2920966879"
                            data-ad-format="auto"
                            data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
            
            </div>
            <div class="col-sm-12 bg-primary text-center text-white">
                <h2>GRUPO B</h2>            
            </div>
            <div class="col-sm-6">
                    <form action="">
                <div class="form-group row">
                    <label class="col-3 text-right">COLOMBIA</label>
                    <div class="col p-0"><input type="text" id="co_1" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>
                    <div class="col p-0"><input type="text" id="ec_1" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 text-left">ECUADOR</label>
                </div>        
        
                <div class="form-group row">
                    <label class="col-3 text-right">BRASIL</label>
                    <div class="col p-0"><input type="text" placeholder="0"  required class="form-control form-control-sm text-center" id="br_1"></div>
                    <div class="col text-center">VS</div>
                    <div class="col p-0"><input type="text" placeholder="0"  required class="form-control form-control-sm text-center" id="ve_1"></div>
                    <label class="col-3 text-left">VENEZUELA</label>
                </div>
                
                <div class="form-group row">
                    <label class="col-3 text-right">PERÙ</label>
                    <div class="col p-0"><input type="text" id="pe_1" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>
                    <div class="col p-0"><input type="text" id="ca_1" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 text-left">CATAR</label>
                </div>
        
        
        
                <div class="form-group row">
                    <label class="col-3 text-right">COLOMBIA</label>
                    <div class="col p-0"><input type="text" id="co_2" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>
                    <div class="col p-0"><input type="text" id="ve_2" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 text-left">VENEZUELA</label>
                </div>
        
                <div class="form-group row">
                    <label class="col-3 text-right">PERÚ</label>
                    <div class="col p-0"><input type="text" id="pe_2" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="br_2" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 text-left">BRASIL</label>
                </div>
        
                <div class="form-group row">
                    <label class="col-3 text-right">ECUADOR</label>
                    <div class="col p-0"><input type="text" id="ec_2" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="ca_2" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 text-left">CATAR</label>
                </div>
        
        
        
                <div class="form-group row">
                    <label class="col-3 text-right">COLOMBIA</label>
                    <div class="col p-0"><input type="text" id="co_3" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>
                    <div class="col p-0"><input type="text" id="pe_3" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 text-left">PERÚ</label>
                </div>
        
                <div class="form-group row">
                    <label class="col-3 text-right">VENEZUELA</label>
                    <div class="col p-0"><input type="text" id="ve_3" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="ec_3" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 text-left">ECUADOR</label>
                </div>
        
                <div class="form-group row">
                    <label class="col-3 text-right">BRASIL</label>
                    <div class="col p-0"><input type="text" id="br_3" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="ca_3" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 text-left">CATAR</label>
                </div>
        
        
        
                <div class="form-group row">
                    <label class="col-3 text-right">BRASIL</label>
                    <div class="col p-0"><input type="text" id="br_4" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>
                    <div class="col p-0"><input type="text" id="co_4" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 text-left">COLOMBIA</label>
                </div>
        
                <div class="form-group row">
                    <label class="col-3 text-right">ECUADOR</label>
                    <div class="col p-0"><input type="text" id="ec_4" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="pe_4" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 text-left">PERÚ</label>
                </div>
        
                <div class="form-group row">
                    <label class="col-3 text-right">CATAR</label>
                    <div class="col p-0"><input type="text" id="ca_4" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="ve_4" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 text-left">VENEZUELA</label>
                </div>
        
        
        
        
                <div class="form-group row">
                    <label class="col-3 text-right">CATAR</label>
                    <div class="col p-0"><input type="text" id="ca_5" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>
                    <div class="col p-0"><input type="text" id="co_5" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 text-left">COLOMBIA</label>
                </div>
        
                <div class="form-group row">
                    <label class="col-3 text-right">ECUADOR</label>
                    <div class="col p-0"><input type="text" id="ec_5" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="br_5" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 text-left">BRASIL</label>
                </div>
        
                <div class="form-group row">
                    <label class="col-3 text-right">VENEZUELA</label>
                    <div class="col p-0"><input type="text" id="ve_5" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <div class="col text-center">VS</div>        
                    <div class="col p-0"><input type="text" id="pe_5" placeholder="0"  required class="form-control form-control-sm text-center"></div>
                    <label class="col-3 text-left">PERÚ</label>
                </div>
        
        
        
               
                </form>
            </div>
            <div class="col-sm-6">
                <div class="row"> 
                <div class="table-responsive">
                    <table class="table table-bordered w-100">
                        <thead class="bg-warning text-dark">
                        <th>POSICIONES</th><th>PJ</th><th>PG</th><th>PE</th><th>PP</th><th>GF</th><th>GC</th><th>PTS</th><th>GD</th>
                        </thead>
                        <tbody id="equipob">                             
                            
                            <tr>
                                <td class="bg-primary text-white"><b>COLOMBIA</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white"><b>BRASIL</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white"><b>CATAR</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white"><b>VENEZUELA</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white"><b>ECUADOR</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white"><b>PERÚ</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                            </tr>
                            
                        </tbody>
                    </table> 
                </div> 
                <div class="col-sm-12 text-center">
                    <h2>Descarga tus predicciones para la Copa América 2020</h2>
                    <p>Pronto podrás descargar tus predicciones en PDF </p>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- appcopaamerica_sidebar-right-1_AdSense2_300x250_as -->
                    <ins class="adsbygoogle"
                        style="display:inline-block;width:300px;height:250px"
                        data-ad-client="ca-pub-9471603402378632"
                        data-ad-slot="4417935272"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <input type="button" class="btn btn-success" id="btngenerar4" value="CALCULAR"/>
            </div>
        <!-- cuartos-->
        <div class="col-sm-6 border text-white mb-4" id="cuartos">
            <div class="row bg-primary">
                <div class="col-12 text-center bg-warning">
                    <h1 class="h5 text-dark pt-3 pb-3"><b>CUARTOS DE FINAL</b></h1>
                </div>
                <div class="col-12">
                    <div class="form-group row">
                        <label id="1b_" class="col-3 text-right">1B</label>
                        <div class="col-2"><input type="text" class="form-control form-control-sm text-center" id="1b"></div>
                        <div class="col-2 text-center">VS</div>
                        <div class="col-2"><input type="text" class="form-control form-control-sm text-center" id="4a"></div>
                        <label id="4a_" class="col-3 text-left">4A</label>
                    </div>
                    <div class="form-group row">
                        <label id="2b_" class="col-3 text-right">2B</label>
                        <div class="col-2"><input type="text" class="form-control form-control-sm text-center" id="2b"></div>
                        <div class="col-2 text-center">VS</div>
                        <div class="col-2"><input type="text" class="form-control form-control-sm text-center" id="3a"></div>
                        <label id="3a_" class="col-3">3A</label>
                    </div>
                    <div class="form-group row">
                        <label id="2a_" class="col-3 text-right">2A</label>
                        <div class="col-2"><input type="text" class="form-control form-control-sm text-center" id="2a"></div>
                        <div class="col-2 text-center">VS</div>
                        <div class="col-2"><input type="text" class="form-control form-control-sm text-center" id="3b"></div>
                        <label id="3b_" class="col-3">3B</label>
                    </div>
                    <div class="form-group row">
                        <label id="1a_" class="col-3 text-right">1A</label>
                        <div class="col-2"><input type="text" class="form-control form-control-sm text-center" id="1a"></div>
                        <div class="col-2 text-center">VS</div>
                        <div class="col-2"><input type="text" class="form-control form-control-sm text-center" id="4b"></div>
                        <label id="4b_" class="col-3">4B</label>
                    </div>
                </div>                
            </div>
        </div>
        <!--- cuartos fin-->
        <!-- SEMIFINAL-->
        <div class="col-sm-6 text-white mb-4" id="semifinal">
            <div class="row bg-primary">
                <div class="col-12 text-center bg-warning">
                    <h1 class="h5 text-dark pt-3 pb-3"><b>SEMIFINALES</b></h1>
                </div>
                <div class="col-12">
                    <div class="form-group row">
                        <label id="s1_" class="col-3 text-right">....</label>
                        <div class="col-2"><input type="text" class="form-control form-control-sm text-center" id="s1"></div>
                        <div class="col-2 text-center">VS</div>
                        <div class="col-2"><input type="text" class="form-control form-control-sm text-center" id="s2"></div>
                        <label id="s2_" class="col-3 text-left">...</label>
                    </div>
                    <div class="form-group row">
                        <label id="s3_" class="col-3 text-right">...</label>
                        <div class="col-2"><input type="text" class="form-control form-control-sm text-center" id="s3"></div>
                        <div class="col-2 text-center">VS</div>
                        <div class="col-2"><input type="text" class="form-control form-control-sm text-center" id="s4"></div>
                        <label id="s4_" class="col-3">....</label>
                    </div>                   
                </div>                
            </div>
        </div>
        <!-- FIN SEMIFINAL-->
        <!-- FINAL -->
        <div class="col-sm-6 text-white" id="final">
            <div class="row bg-primary">
                <div class="col-12 text-center bg-warning">
                   <h1 class="h5 text-dark pt-3 pb-3"><b>TERCER LUGAR</b></h1>
                </div>
                <div class="col-12">
                    <div class="form-group row">
                        <label id="p1_" class="col-3 text-right">...</label>
                        <div class="col-2"><input type="text" class="form-control form-control-sm text-center" id="p1"></div>
                        <div class="col-2 text-center">VS</div>
                        <div class="col-2"><input type="text" class="form-control form-control-sm text-center" id="p2"></div>
                        <label id="p2_" class="col-3 text-left">...</label>
                    </div>                    
                </div>

                <div class="col-12 text-center bg-warning">
                   <h1 class="h5 text-dark pt-3 pb-3"><b>FINAL</b></h1>
                </div>

                <div class="col-12">
                    <div class="form-group row">
                        <label id="g1_" class="col-3 text-right">...</label>
                        <div class="col-2"><input type="text" class="form-control form-control-sm text-center" required id="g1"></div>
                        <div class="col-2 text-center">VS</div>
                        <div class="col-2"><input type="text" class="form-control form-control-sm text-center" required id="g2"></div>
                        <label id="g2_" class="col-3 text-left">...</label>
                    </div>       
                </div>

            </div>
        </div>
        <!-- FIN FINAL -->    

        </div>
    </div>
    <div class="col-sm-12">
        <h2>Calculador o simulador de predicciones para la Copa América 2020</h2>
        <p>Es una página para que puedas realizar cálculos  y predicciones de los partidos de la Copa América 2020. Pruébalo ...  Y si crees que podemos mejorar en algo, por favor haznos saber y si te parece genial recomienda ésta página</p>
    </div>
   
</div>
</div>
<script>
$(document).ready(function(){
var  equiposa = [
    { 'id':1, "nombre":"Argentina",  'pj':0, 'pg':0, 'pe':0, 'pp':0, 'gf':0, 'gc':0, 'pts':0, 'gd':0 },
    { 'id':2, "nombre":"Australia",  'pj':0, 'pg':0, 'pe':0, 'pp':0, 'gf':0, 'gc':0, 'pts':0, 'gd':0 },
    { 'id':3, "nombre":"Bolivia",   'pj':0, 'pg':0, 'pe':0, 'pp':0, 'gf':0, 'gc':0, 'pts':0, 'gd':0 },
    { 'id':4, "nombre":"Uruguay",   'pj':0, 'pg':0, 'pe':0, 'pp':0, 'gf':0, 'gc':0, 'pts':0, 'gd':0 },
    { 'id':5, "nombre":"Chile",     'pj':0, 'pg':0, 'pe':0, 'pp':0, 'gf':0, 'gc':0, 'pts':0, 'gd':0 },
    { 'id':6, "nombre":"Paraguay",   'pj':0, 'pg':0, 'pe':0, 'pp':0, 'gf':0, 'gc':0, 'pts':0, 'gd':0 }
];
var  equiposb = [
    { 'id':1, "nombre":"Colombia",   'pj':0, 'pg':0, 'pe':0, 'pp':0, 'gf':0, 'gc':0, 'pts':0, 'gd':0 },
    { 'id':2, "nombre":"Brasil",    'pj':0, 'pg':0, 'pe':0, 'pp':0, 'gf':0, 'gc':0, 'pts':0, 'gd':0 },
    { 'id':3, "nombre":"Catar",      'pj':0, 'pg':0, 'pe':0, 'pp':0, 'gf':0, 'gc':0, 'pts':0, 'gd':0 },
    { 'id':4, "nombre":"Venezuela", 'pj':0, 'pg':0, 'pe':0, 'pp':0, 'gf':0, 'gc':0, 'pts':0, 'gd':0 },
    { 'id':5, "nombre":"Ecuador",   'pj':0, 'pg':0, 'pe':0, 'pp':0, 'gf':0, 'gc':0, 'pts':0, 'gd':0 },
    { 'id':6, "nombre":"Perú",      'pj':0, 'pg':0, 'pe':0, 'pp':0, 'gf':0, 'gc':0, 'pts':0, 'gd':0 } 
];


render($("#equipoa"),equiposa)
render($("#equipob"),equiposb)
   
$("#ar_1").keyup(function(){
    if(($("#ar_1").val()!="") && ($("#ch_1").val()!="")){
        calcula($("#ch_1"),$("#ar_1"), buscar(equiposa,"Argentina"),buscar(equiposa,"Chile") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#ch_1").prop('disabled',true); $("#ar_1").prop('disabled',true);
    }    
})
$("#ch_1").keyup(function(){
    if(($("#ch_1").val()!="") && ($("#ar_1").val()!="")){
        calcula($("#ar_1"),$("#ch_1"), buscar(equiposa,"Argentina"),buscar(equiposa,"Chile") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#ar_1").prop('disabled',true); $("#ch_1").prop('disabled',true);
    }    
})
$("#au_1").keyup(function(){
    if(($("#au_1").val()!="") && ($("#ur_1").val()!="")){
        calcula($("#ur_1"),$("#au_1"), buscar(equiposa,"Australia"),buscar(equiposa,"Uruguay") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#ur_1").prop('disabled',true); $("#au_1").prop('disabled',true);
    }    
})
$("#ur_1").keyup(function(){
    if(($("#ur_1").val()!="") && ($("#au_1").val()!="")){
        calcula($("#au_1"),$("#ur_1"), buscar(equiposa,"Australia"),buscar(equiposa,"Uruguay") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#au_1").prop('disabled',true); $("#ur_1").prop('disabled',true);
    }    
})
$("#pa_1").keyup(function(){
    if(($("#pa_1").val()!="") && ($("#bo_1").val()!="")){
        calcula($("#bo_1"),$("#pa_1"), buscar(equiposa,"Paraguay"),buscar(equiposa,"Bolivia") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#bo_1").prop('disabled',true); $("#pa_1").prop('disabled',true);
    }    
})
$("#bo_1").keyup(function(){
    if(($("#bo_1").val()!="") && ($("#pa_1").val()!="")){
        calcula($("#pa_1"),$("#bo_1"), buscar(equiposa,"Paraguay"),buscar(equiposa,"Bolivia") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#pa_1").prop('disabled',true); $("#bo_1").prop('disabled',true);
    }    
})

/* -------------------------------- */
$("#ar_2").keyup(function(){
    if(($("#ar_2").val()!="") && ($("#ur_2").val()!="")){
        calcula($("#ur_2"),$("#ar_2"), buscar(equiposa,"Argentina"),buscar(equiposa,"Uruguay") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#ur_2").prop('disabled',true); $("#ar_2").prop('disabled',true);
    }    
})
$("#ur_2").keyup(function(){
    if(($("#ur_2").val()!="") && ($("#ar_2").val()!="")){
        calcula($("#ar_2"),$("#ur_2"), buscar(equiposa,"Argentina"),buscar(equiposa,"Uruguay") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#ar_2").prop('disabled',true); $("#ur_2").prop('disabled',true);
    }    
})
$("#ch_2").keyup(function(){
    if(($("#ch_2").val()!="") && ($("#bol_2").val()!="")){
        calcula($("#bol_2"),$("#ch_2"), buscar(equiposa,"Chile"),buscar(equiposa,"Bolivia") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#bol_2").prop('disabled',true); $("#ch_2").prop('disabled',true);
    }    
})
$("#bo_2").keyup(function(){
    if(($("#bo_2").val()!="") && ($("#ch_2").val()!="")){
        calcula($("#ch_2"),$("#bo_2"), buscar(equiposa,"Chile"),buscar(equiposa,"Bolivia") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#ch_2").prop('disabled',true); $("#bo_2").prop('disabled',true);
    }    
})
$("#pa_2").keyup(function(){
    if(($("#pa_2").val()!="") && ($("#au_2").val()!="")){
        calcula($("#au_2"),$("#pa_2"), buscar(equiposa,"Paraguay"),buscar(equiposa,"Australia") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#au_2").prop('disabled',true); $("#pa_2").prop('disabled',true);
    }    
})
$("#au_2").keyup(function(){
    if(($("#au_2").val()!="") && ($("#pa_2").val()!="")){
        calcula($("#pa_2"),$("#au_2"), buscar(equiposa,"Paraguay"),buscar(equiposa,"Australia") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#pa_2").prop('disabled',true); $("#au_2").prop('disabled',true);
    }    
})


/* -------------------------------- */
$("#ar_3").keyup(function(){
    if(($("#ar_3").val()!="") && ($("#pa_3").val()!="")){
        calcula($("#pa_3"),$("#ar_3"), buscar(equiposa,"Argentina"),buscar(equiposa,"Paraguay") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#pa_3").prop('disabled',true); $("#ar_3").prop('disabled',true);
    }    
})
$("#pa_3").keyup(function(){
    if(($("#pa_3").val()!="") && ($("#ar_3").val()!="")){
        calcula($("#ar_3"),$("#pa_3"), buscar(equiposa,"Argentina"),buscar(equiposa,"Paraguay") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#ar_3").prop('disabled',true); $("#pa_3").prop('disabled',true);
    }    
})
$("#ur_3").keyup(function(){
    if(($("#ur_3").val()!="") && ($("#ch_3").val()!="")){
        calcula($("#ch_3"),$("#ur_3"), buscar(equiposa,"Uruguay"),buscar(equiposa,"Chile") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#ch_3").prop('disabled',true); $("#ur_3").prop('disabled',true);
    }    
})
$("#ch_3").keyup(function(){
    if(($("#ch_3").val()!="") && ($("#ur_3").val()!="")){
        calcula($("#ur_3"),$("#ch_3"), buscar(equiposa,"Uruguay"),buscar(equiposa,"Chile") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#ur_3").prop('disabled',true); $("#ch_3").prop('disabled',true);
    }    
})
$("#au_3").keyup(function(){
    if(($("#au_3").val()!="") && ($("#bo_3").val()!="")){
        calcula($("#bo_3"),$("#au_3"), buscar(equiposa,"Australia"),buscar(equiposa,"Bolivia") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#bo_3").prop('disabled',true); $("#au_3").prop('disabled',true);
    }    
})
$("#bo_3").keyup(function(){
    if(($("#bo_3").val()!="") && ($("#au_3").val()!="")){
        calcula($("#au_3"),$("#bo_3"), buscar(equiposa,"Australia"),buscar(equiposa,"Bolivia") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#au_3").prop('disabled',true); $("#bo_3").prop('disabled',true);
    }    
})

/* -------------------------------- */
$("#ch_4").keyup(function(){
    if(($("#ch_4").val()!="") && ($("#pa_4").val()!="")){
        calcula($("#pa_4"),$("#ch_4"), buscar(equiposa,"Chile"),buscar(equiposa,"Paraguay") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#pa_4").prop('disabled',true); $("#ch_4").prop('disabled',true);
    }    
})
$("#pa_4").keyup(function(){
    if(($("#pa_4").val()!="") && ($("#ch_4").val()!="")){
        calcula($("#ch_4"),$("#pa_4"), buscar(equiposa,"Chile"),buscar(equiposa,"Paraguay") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#ch_4").prop('disabled',true); $("#pa_4").prop('disabled',true);
    }    
})
$("#au_4").keyup(function(){
    if(($("#au_4").val()!="") && ($("#ar_4").val()!="")){
        calcula($("#ar_4"),$("#au_4"), buscar(equiposa,"Australia"),buscar(equiposa,"Argentina") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#ar_4").prop('disabled',true); $("#au_4").prop('disabled',true);
    }    
})
$("#ar_4").keyup(function(){
    if(($("#ar_4").val()!="") && ($("#au_4").val()!="")){
        calcula($("#au_4"),$("#ar_4"), buscar(equiposa,"Australia"),buscar(equiposa,"Argentina") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#au_4").prop('disabled',true); $("#ar_4").prop('disabled',true);
    }    
})
$("#bo_4").keyup(function(){
    if(($("#bo_4").val()!="") && ($("#ur_4").val()!="")){
        calcula($("#ur_4"),$("#bo_4"), buscar(equiposa,"Bolivia"),buscar(equiposa,"Uruguay") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#ur_4").prop('disabled',true); $("#bo_4").prop('disabled',true);
    }    
})
$("#ur_4").keyup(function(){
    if(($("#ur_4").val()!="") && ($("#bo_4").val()!="")){
        calcula($("#bo_4"),$("#ur_4"), buscar(equiposa,"Bolivia"),buscar(equiposa,"Uruguay") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#bo_4").prop('disabled',true); $("#ur_4").prop('disabled',true);
    }    
})

/* -------------------------------- */
$("#bo_5").keyup(function(){
    if(($("#bo_5").val()!="") && ($("#ar_5").val()!="")){
        calcula($("#ar_5"),$("#bo_5"), buscar(equiposa,"Bolivia"),buscar(equiposa,"Argentina") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#ar_5").prop('disabled',true); $("#bo_5").prop('disabled',true);
    }    
})
$("#ar_5").keyup(function(){
    if(($("#ar_5").val()!="") && ($("#bo_5").val()!="")){
        calcula($("#bo_5"),$("#ar_5"), buscar(equiposa,"Bolivia"),buscar(equiposa,"Argentina") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#bo_5").prop('disabled',true); $("#ar_5").prop('disabled',true);
    }    
})
$("#ch_5").keyup(function(){
    if(($("#ch_5").val()!="") && ($("#au_5").val()!="")){
        calcula($("#au_5"),$("#ch_5"), buscar(equiposa,"Chile"),buscar(equiposa,"Australia") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#au_5").prop('disabled',true); $("#ch_5").prop('disabled',true);
    }    
})
$("#au_5").keyup(function(){
    if(($("#au_5").val()!="") && ($("#ch_5").val()!="")){
        calcula($("#ch_5"),$("#au_5"), buscar(equiposa,"Chile"),buscar(equiposa,"Australia") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#ch_5").prop('disabled',true); $("#au_5").prop('disabled',true);
    }    
})
$("#ur_5").keyup(function(){
    if(($("#ur_5").val()!="") && ($("#pa_5").val()!="")){
        calcula($("#pa_5"),$("#ur_5"), buscar(equiposa,"Uruguay"),buscar(equiposa,"Paraguay") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#pa_5").prop('disabled',true); $("#ur_5").prop('disabled',true);
    }    
})
$("#pa_5").keyup(function(){
    if(($("#pa_5").val()!="") && ($("#ur_5").val()!="")){
        calcula($("#ur_5"),$("#pa_5"), buscar(equiposa,"Uruguay"),buscar(equiposa,"Paraguay") ); equiposa.sort(sort); 
        render($("#equipoa"),equiposa); $("#ur_5").prop('disabled',true); $("#pa_5").prop('disabled',true);
    }    
})

/* SEGUNDA PARTE  */
/* SEGUNDA PARTE  */
/* SEGUNDA PARTE  */

$("#co_1").keyup(function(){
    if(($("#co_1").val()!="") && ($("#ec_1").val()!="")){
        calcula($("#ec_1"),$("#co_1"), buscar(equiposb,"Colombia"),buscar(equiposb,"Ecuador") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#ec_1").prop('disabled',true); $("#co_1").prop('disabled',true);
    }    
})
$("#ec_1").keyup(function(){
    if(($("#ec_1").val()!="") && ($("#co_1").val()!="")){
        calcula($("#co_1"),$("#ec_1"), buscar(equiposb,"Colombia"),buscar(equiposb,"Ecuador") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#co_1").prop('disabled',true); $("#ec_1").prop('disabled',true);
    }    
})
$("#br_1").keyup(function(){
    if(($("#br_1").val()!="") && ($("#ve_1").val()!="")){
        calcula($("#ve_1"),$("#br_1"), buscar(equiposb,"Brasil"),buscar(equiposb,"Venezuela") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#ve_1").prop('disabled',true); $("#br_1").prop('disabled',true);
    }    
})
$("#ve_1").keyup(function(){
    if(($("#ve_1").val()!="") && ($("#br_1").val()!="")){
        calcula($("#br_1"),$("#ve_1"), buscar(equiposb,"Brasil"),buscar(equiposb,"Venezuela") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#br_1").prop('disabled',true); $("#ve_1").prop('disabled',true);
    }    
})
$("#pe_1").keyup(function(){
    if(($("#pe_1").val()!="") && ($("#ca_1").val()!="")){
        calcula($("#ca_1"),$("#pe_1"), buscar(equiposb,"Perú"),buscar(equiposb,"Catar") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#ca_1").prop('disabled',true); $("#pe_1").prop('disabled',true);
    }    
})
$("#ca_1").keyup(function(){
    if(($("#ca_1").val()!="") && ($("#pe_1").val()!="")){
        calcula($("#pe_1"),$("#ca_1"), buscar(equiposb,"Perú"),buscar(equiposb,"Catar") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#pe_1").prop('disabled',true); $("#ca_1").prop('disabled',true);
    }    
})

/* 222222222222222222-------------2 */
$("#co_2").keyup(function(){
    if(($("#co_2").val()!="") && ($("#ve_2").val()!="")){
        calcula($("#ve_2"),$("#co_2"), buscar(equiposb,"Colombia"),buscar(equiposb,"Venezuela") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#ve_2").prop('disabled',true); $("#co_2").prop('disabled',true);
    }    
})
$("#ve_2").keyup(function(){
    if(($("#ve_2").val()!="") && ($("#co_2").val()!="")){
        calcula($("#co_2"),$("#ve_2"), buscar(equiposb,"Colombia"),buscar(equiposb,"Venezuela") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#co_2").prop('disabled',true); $("#ve_2").prop('disabled',true);
    }    
})
$("#pe_2").keyup(function(){
    if(($("#pe_2").val()!="") && ($("#br_2").val()!="")){
        calcula($("#br_2"),$("#pe_2"), buscar(equiposb,"Perú"),buscar(equiposb,"Brasil") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#br_2").prop('disabled',true); $("#pe_2").prop('disabled',true);
    }    
})
$("#br_2").keyup(function(){
    if(($("#br_2").val()!="") && ($("#pe_2").val()!="")){
        calcula($("#pe_2"),$("#br_2"), buscar(equiposb,"Perú"),buscar(equiposb,"Brasil") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#pe_2").prop('disabled',true); $("#br_2").prop('disabled',true);
    }    
})
$("#ec_2").keyup(function(){
    if(($("#ec_2").val()!="") && ($("#ca_2").val()!="")){
        calcula($("#ca_2"),$("#ec_2"), buscar(equiposb,"Ecuador"),buscar(equiposb,"Catar") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#ca_2").prop('disabled',true); $("#ec_2").prop('disabled',true);
    }    
})
$("#ca_2").keyup(function(){
    if(($("#ca_2").val()!="") && ($("#ec_2").val()!="")){
        calcula($("#ec_2"),$("#ca_2"), buscar(equiposb,"Ecuador"),buscar(equiposb,"Catar") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#ec_2").prop('disabled',true); $("#ca_2").prop('disabled',true);
    }    
})
/* 3333333-------------2 */
$("#co_3").keyup(function(){
    if(($("#co_3").val()!="") && ($("#pe_3").val()!="")){
        calcula($("#pe_3"),$("#co_3"), buscar(equiposb,"Colombia"),buscar(equiposb,"Perú") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#pe_3").prop('disabled',true); $("#co_3").prop('disabled',true);
    }    
})
$("#pe_3").keyup(function(){
    if(($("#pe_3").val()!="") && ($("#co_3").val()!="")){
        calcula($("#co_3"),$("#pe_3"), buscar(equiposb,"Colombia"),buscar(equiposb,"Perú") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#co_3").prop('disabled',true); $("#pe_3").prop('disabled',true);
    }    
})
$("#ve_3").keyup(function(){
    if(($("#ve_3").val()!="") && ($("#ec_3").val()!="")){
        calcula($("#ec_3"),$("#ve_3"), buscar(equiposb,"Venezuela"),buscar(equiposb,"Ecuador") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#ec_3").prop('disabled',true); $("#ve_3").prop('disabled',true);
    }    
})
$("#ec_3").keyup(function(){
    if(($("#ec_3").val()!="") && ($("#ve_3").val()!="")){
        calcula($("#ve_3"),$("#ec_3"), buscar(equiposb,"Venezuela"),buscar(equiposb,"Ecuador") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#ve_3").prop('disabled',true); $("#ec_3").prop('disabled',true);
    }    
})
$("#br_3").keyup(function(){
    if(($("#br_3").val()!="") && ($("#ca_3").val()!="")){
        calcula($("#ca_3"),$("#br_3"), buscar(equiposb,"Brasil"),buscar(equiposb,"Catar") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#ca_3").prop('disabled',true); $("#br_3").prop('disabled',true);
    }    
})
$("#ca_3").keyup(function(){
    if(($("#ca_3").val()!="") && ($("#br_3").val()!="")){
        calcula($("#br_3"),$("#ca_3"), buscar(equiposb,"Brasil"),buscar(equiposb,"Catar") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#br_3").prop('disabled',true); $("#ca_3").prop('disabled',true);
    }    
})

/* 44444444-------------2 */
$("#br_4").keyup(function(){
    if(($("#br_4").val()!="") && ($("#co_4").val()!="")){
        calcula($("#co_4"),$("#br_4"), buscar(equiposb,"Brasil"),buscar(equiposb,"Colombia") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#co_4").prop('disabled',true); $("#br_4").prop('disabled',true);
    }    
})
$("#co_4").keyup(function(){
    if(($("#co_4").val()!="") && ($("#br_4").val()!="")){
        calcula($("#br_4"),$("#co_4"), buscar(equiposb,"Brasil"),buscar(equiposb,"Colombia") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#br_4").prop('disabled',true); $("#co_4").prop('disabled',true);
    }    
})
$("#ec_4").keyup(function(){
    if(($("#ec_4").val()!="") && ($("#pe_4").val()!="")){
        calcula($("#pe_4"),$("#ec_4"), buscar(equiposb,"Ecuador"),buscar(equiposb,"Perú") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#pe_4").prop('disabled',true); $("#ec_4").prop('disabled',true);
    }    
})
$("#pe_4").keyup(function(){
    if(($("#pe_4").val()!="") && ($("#ec_4").val()!="")){
        calcula($("#ec_4"),$("#pe_4"), buscar(equiposb,"Ecuador"),buscar(equiposb,"Perú") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#ec_4").prop('disabled',true); $("#pe_4").prop('disabled',true);
    }    
})
$("#ca_4").keyup(function(){
    if(($("#ca_4").val()!="") && ($("#ve_4").val()!="")){
        calcula($("#ve_4"),$("#ca_4"), buscar(equiposb,"Catar"),buscar(equiposb,"Venezuela") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#ve_4").prop('disabled',true); $("#ca_4").prop('disabled',true);
    }    
})
$("#ve_4").keyup(function(){
    if(($("#ve_4").val()!="") && ($("#ca_4").val()!="")){
        calcula($("#ca_4"),$("#ve_4"), buscar(equiposb,"Catar"),buscar(equiposb,"Venezuela") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#ca_4").prop('disabled',true); $("#ve_4").prop('disabled',true);
    }    
})

/* 555555555-------------2 */
$("#ca_5").keyup(function(){
    if(($("#ca_5").val()!="") && ($("#co_5").val()!="")){
        calcula($("#co_5"),$("#ca_5"), buscar(equiposb,"Catar"),buscar(equiposb,"Colombia") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#co_5").prop('disabled',true); $("#ca_5").prop('disabled',true);
    }    
})
$("#co_5").keyup(function(){
    if(($("#co_5").val()!="") && ($("#ca_5").val()!="")){
        calcula($("#ca_5"),$("#co_5"), buscar(equiposb,"Catar"),buscar(equiposb,"Colombia") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#ca_5").prop('disabled',true); $("#co_5").prop('disabled',true);
    }    
})
$("#ec_5").keyup(function(){
    if(($("#ec_5").val()!="") && ($("#br_5").val()!="")){
        calcula($("#br_5"),$("#ec_5"), buscar(equiposb,"Ecuador"),buscar(equiposb,"Brasil") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#br_5").prop('disabled',true); $("#ec_5").prop('disabled',true);
    }    
})
$("#br_5").keyup(function(){
    if(($("#br_5").val()!="") && ($("#ec_5").val()!="")){
        calcula($("#ec_5"),$("#br_5"), buscar(equiposb,"Ecuador"),buscar(equiposb,"Brasil") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#ec_5").prop('disabled',true); $("#br_5").prop('disabled',true);
    }    
})
$("#ve_5").keyup(function(){
    if(($("#ve_5").val()!="") && ($("#pe_5").val()!="")){
        calcula($("#pe_5"),$("#ve_5"), buscar(equiposb,"Venezuela"),buscar(equiposb,"Perú") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#pe_5").prop('disabled',true); $("#ve_5").prop('disabled',true);
    }    
})
$("#pe_5").keyup(function(){
    if(($("#pe_5").val()!="") && ($("#ve_5").val()!="")){
        calcula($("#ve_5"),$("#pe_5"), buscar(equiposb,"Venezuela"),buscar(equiposb,"Perú") ); equiposb.sort(sort); 
        render($("#equipob"),equiposb); $("#ve_5").prop('disabled',true); $("#pe_5").prop('disabled',true);
    }    
})

$("#btngenerar4").click(function(){
    $("#1b_").html(equiposb[0]["nombre"]); $("#4a_").html(equiposa[3]["nombre"])
    $("#2b_").html(equiposb[1]["nombre"]); $("#3a_").html(equiposa[2]["nombre"])
    $("#2a_").html(equiposa[1]["nombre"]); $("#3b_").html(equiposb[2]["nombre"])
    $("#1a_").html(equiposa[0]["nombre"]); $("#4b_").html(equiposb[3]["nombre"])
})
// CUARTOS
$("#4a").keyup(function(){ 
    if($("#1b").val() > $("#4a").val() ){
        $("#s3_").text( $("#1b_").text() )
    }else{
        $("#s3_").text( $("#4a_").text() )
    }
})
$("#3a").keyup(function(){ 

    if($("#2b").val() > $("#3a").val() ){
        $("#s4_").text( $("#2b_").text() )
    }else{
        $("#s4_").text( $("#3a_").text() )
    }
})

$("#3b").keyup(function(){ 
    if($("#2a").val() > $("#3b").val() ){
        $("#s1_").text( $("#2a_").text() )
    }else{
        $("#s1_").text( $("#3b_").text() )
    } 
})
$("#4b").keyup(function(){ 
    if($("#1a").val() > $("#4b").val() ){
        $("#s2_").text( $("#1a_").text() )
    }else{
        $("#s2_").text( $("#4b_").text() )
    } 
})

// SEMIFINALES
$("#s4").keyup(function(){ 
    if($("#s3").val() > $("#s4").val() ){
        $("#g1_").text( $("#s3_").text() )
        $("#p1_").text( $("#s4_").text() )
    }else{
        $("#g1_").text( $("#s4_").text() )
        $("#p1_").text( $("#s3_").text() )
    } 
})
$("#s2").keyup(function(){ 
    if($("#s1").val() > $("#s2").val() ){
        $("#g2_").text( $("#s1_").text() )
        $("#p2_").text( $("#s2_").text() )
    }else{
        $("#g2_").text( $("#s2_").text() )
        $("#p2_").text( $("#s1_").text() )
    } 
})


function buscar(equipo,cadena){
    for(var x=0;x<6;x++)
        if(equipo[x].nombre==cadena){
            return equipo[x];
            exit();
        }
}

function sort(a,b){
  a = a.pts;
  b = b.pts;
  if(a < b) {
    return 1;
  } else if (a > b) {
    return -1;
  }
  return 0;
}
function render(i,e){
        var cadena="";
        for(var f=0;f<Object.keys(e).length;f++)
            cadena+="<tr><td class='bg-dark text-warning'>"+e[f]['nombre']+"</td><td>"+e[f]['pj']+"</td><td>"+e[f]['pg']+"</td><td>"+e[f]['pe']+"</td><td>"+e[f]['pp']+"</td><td>"+e[f]['gf']+"</td><td>"+e[f]['gc']+"</td><td class='text-warning'>"+e[f]['pts']+"</td><td>"+e[f]['gd']+"</td></tr>";
        i.html(cadena)
}
function calcula(equipoa, equipob,a,b){
        //alert(equipoa.val()+"-"+equipob.val())
        var golesa      = Number(equipoa.val());
        var golesb      = Number(equipob.val());
        if ((golesa>-1) && (golesb>-1)){
            if(golesa>golesb){
                b['pp']+=1;
                a['pg']+=1;                
                a['pts']+=3;
            }
            if(golesa<golesb){
                a['pp']+=1;
                b['pg']+=1;                
                b['pts']+=3;
            }
            if(golesa==golesb){
                a['pe']+=1;
                b['pe']+=1;
                a['pts']+=1;
                b['pts']+=1;
            }            
            a['pj']+=1;
            b['pj']+=1;

            a['gf']+=golesa;
            b['gf']+=golesb;

            a['gc']+=golesb;
            b['gc']+=golesa;

            a['gd']=a['gf'] - a['gc'];
            b['gd']=b['gf'] - b['gc'];    
        }

}
})    
    
</script>
@endsection