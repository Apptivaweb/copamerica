@extends('layouts.app')
@section('title')SUPER Simulador Online de la Copa América 2020, Haz tus predicciones online @endsection
    @section('description')Generador de cartillas de predicción de resultados de los partidos para la Copa América, crea o genera tu predicciones de los partidos desde los grupos hasta la final para compartir en Facebook, WhatsApp, Twitter @endsection
    @section('keywords') Simulador de Copa América,Predicciones @endsection
    @section('url'){{url('/simulador-copa') }} @endsection
    @section('image'){{url('/img/simulador-copa-america.jpg') }} @endsection
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="row">
    <div class="col-sm-9">
        <div class="row">
        <div class="col-6 bg-white p-0 ">
            <table class="table bg-info shadow-lg table-sm">
                <thead><th colspan="5"><h2 class="text-center">GRUPO A</h2></th></thead>
                <tbody>
                    <tr class="bg-dark text-white">
                        <td class="text-right">Puesto</td>
                        <td>1<sup>er</sup></td>
                        <td>2<sup>do</sup></td>
                        <td>3<sup>ro</sup></td>
                        <td>4<sup>to</sup></td>
                    </tr>
                    <tr>
                        <td class="text-right">Argentina</td>
                        <td><input type="radio" name="1a" class="argentina" id="ar1"></td>
                        <td><input type="radio" name="2a" class="argentina" id="ar2"></td>
                        <td><input type="radio" name="3a" class="argentina" id="ar3"></td>
                        <td><input type="radio" name="4a" class="argentina" id="ar4"></td>
                    </tr>
                    <tr>
                        <td class="text-right">Australia</td>
                        <td><input type="radio" name="1a" class="australia" id="au1"></td>
                        <td><input type="radio" name="2a" class="australia" id="au2"></td>
                        <td><input type="radio" name="3a" class="australia" id="au3"></td>
                        <td><input type="radio" name="4a" class="australia" id="au4"></td>
                    </tr>
                    <tr>
                        <td class="text-right">Bolivia</td>
                        <td><input type="radio" name="1a" class="bolivia" id="bo1"></td>
                        <td><input type="radio" name="2a" class="bolivia" id="bo2"></td>
                        <td><input type="radio" name="3a" class="bolivia" id="bo3"></td>
                        <td><input type="radio" name="4a" class="bolivia" id="bo4"></td>
                    </tr>
                    <tr>
                        <td class="text-right">Uruguay</td class="text-right">
                        <td><input type="radio" name="1a" class="uruguay" id="ur1"></td>
                        <td><input type="radio" name="2a" class="uruguay" id="ur2"></td>
                        <td><input type="radio" name="3a" class="uruguay" id="ur3"></td>
                        <td><input type="radio" name="4a" class="uruguay" id="ur4"></td>
                    </tr>
                    <tr>
                        <td class="text-right">Chile</td class="text-right">
                        <td><input type="radio" name="1a" class="Chile" id="ch1"></td>
                        <td><input type="radio" name="2a" class="Chile" id="ch2"></td>
                        <td><input type="radio" name="3a" class="Chile" id="ch3"></td>
                        <td><input type="radio" name="4a" class="Chile" id="ch4"></td>
                    </tr>
                    <tr>
                        <td class="text-right">Paraguay</td class="text-right">
                        <td><input type="radio" name="1a" class="paraguay" id="pa1"></td>
                        <td><input type="radio" name="2a" class="paraguay" id="pa2"></td>
                        <td><input type="radio" name="3a" class="paraguay" id="pa3"></td>
                        <td><input type="radio" name="4a" class="paraguay" id="pa4"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-6 bg-white p-0">
            <table class="table bg-warning table-sm ">
                <thead><th colspan="5"><h2 class="text-center">GRUPO B</h2></th></thead>
                <tbody>
                    <tr class="bg-dark text-white">
                        <td>1<sup>er</sup></td>
                        <td>2<sup>do</sup></td>
                        <td>3<sup>ro</sup></td>
                        <td>4<sup>to</sup></td>
                        <td>Puesto</td>
                    </tr>
                <tr>
                    <td><input type="radio" name="1b" class="colombia" id="co1"></td>
                    <td><input type="radio" name="2b" class="colombia" id="co2"></td>
                    <td><input type="radio" name="3b" class="colombia" id="co3"></td>
                    <td><input type="radio" name="4b" class="colombia" id="co4"></td>
                    <td>Colombia</td>
                </tr>
                <tr>                
                    <td><input type="radio" name="1b" class="brasil" id="br1"></td>
                    <td><input type="radio" name="2b" class="brasil" id="br2"></td>
                    <td><input type="radio" name="3b" class="brasil" id="br3"></td>
                    <td><input type="radio" name="4b" class="brasil" id="br4"></td>
                    <td>Brasil</td>
                </tr>
                <tr>
                    <td><input type="radio" name="1b" class="catar" id="ca1"></td>
                    <td><input type="radio" name="2b" class="catar" id="ca2"></td>
                    <td><input type="radio" name="3b" class="catar" id="ca3"></td>
                    <td><input type="radio" name="4b" class="catar" id="ca4"></td>
                    <td>Catar</td>
                </tr>
                <tr>                
                    <td><input type="radio" name="1b" class="venezuela" id="ve1"></td>
                    <td><input type="radio" name="2b" class="venezuela" id="ve2"></td>
                    <td><input type="radio" name="3b" class="venezuela" id="ve3"></td>
                    <td><input type="radio" name="4b" class="venezuela" id="ve4"></td>
                    <td>Venezuela</td>
                </tr>
                <tr>                
                    <td><input type="radio" name="1b" class="ecuador" id="ec1"></td>
                    <td><input type="radio" name="2b" class="ecuador" id="ec2"></td>
                    <td><input type="radio" name="3b" class="ecuador" id="ec3"></td>
                    <td><input type="radio" name="4b" class="ecuador" id="ec4"></td>
                    <td>Ecuador</td>
                </tr>
                <tr>                
                    <td><input type="radio" name="1b" class="peru" id="pe1"></td>
                    <td><input type="radio" name="2b" class="peru" id="pe2"></td>
                    <td><input type="radio" name="3b" class="peru" id="pe3"></td>
                    <td><input type="radio" name="4b" class="peru" id="pe4"></td>
                    <td>Perú</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-12 bg-white p-0">
            <div class="table-responsive">
            <table class="table table-bordered table-sm">
                <tr>
                    <td class="text-right" id="_2b"><label for=""><span id="2b">2°B </span><input type="radio" name="g3" id="2b_"></label></td>
                    <td rowspan="2" class="text-right"><label for=""><span id="s1">SEMIFINAL 1</span><input type="radio" name="ganadora" id="s1_"></label></td>
                    <td rowspan="4"><label for=""><span id="final1">FINAL </span><input type="radio" name="final"></label></td>
                    <td rowspan="4"><label for=""><span id="final2">FINAL </span><input type="radio" name="final"></label></td>
                    <td rowspan="2"><label for=""><input type="radio" name="ganadorb" id="s3_"><span id="s3">SEMIFINAL 3</span></label></td>
                    <td id="_2a"><label for=""><input type="radio" name="g4" id="2a_"><span id="2a"> 2°A</span></label></td>
                </tr>
                <tr>
                    <td class="text-right" id="_3a"><label for=""><span id="3a">3°A </span><input type="radio" name="g3" id="3a_"></label></td>
                    <td id="_3b"><label for=""><input type="radio" name="g4" id="3b_"><span id="3b"> 3°B</span></label></td>
                </tr>
                <tr>
                    <td class="text-right" id="_1b"><label for=""><span id="1b">1°B </span><input type="radio" name="g2" id="1b_"></label></td>
                    <td rowspan="2" class="text-right"><label for=""><span id="s2">SEMIFINAL 2</span><input type="radio" name="ganadora" id="s2_"></label></td>
                    <td rowspan="2"><label for=""><input type="radio" name="ganadorb" id="s4_"><span id="s4">SEMIFINAL 4</span></label></td>
                    <td id="_1a"><label for=""><input type="radio" name="g1" id="1a_"><span id="1a"> 1°A </span></label></td>
                </tr>
                <tr>
                    <td class="text-right" id="_4a"><label for=""><span id="4a">4°A </span><input type="radio" name="g2" id="4a_"></label></td>
                    <td id="_4b"><label for=""><input type="radio" name="g1" id="4b_"><span id="4b"> 4°B</span></label></td>
                </tr>
            </table>
            </div>
            <div class="jumbotron">
                <p class="text-center">Si desea un calculador con entrada de goles, puntos a favor, en contra, total acumulado y orden de los equipos en tiempo real <br> <a href="https://copaamerica2019.app/simulador" title="Generador de predicciones" class="btn btn-success"> Ver simulador avanzado</a></p>
            </div>
        </div>
        </div>
    </div>
    <div class="col-sm-3">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- apptivaweb adaptable -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-9471603402378632"
            data-ad-slot="8938323702"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</div>
</div>
<script>
var ar1= document.getElementById("ar1");var ar2= document.getElementById("ar2");var ar3= document.getElementById("ar3");var ar4= document.getElementById("ar4");
var au1= document.getElementById("au1");var au2= document.getElementById("au2");var au3= document.getElementById("au3");var au4= document.getElementById("au4");
var bo1= document.getElementById("bo1");var bo2= document.getElementById("bo2");var bo3= document.getElementById("bo3");var bo4= document.getElementById("bo4");
var ur1= document.getElementById("ur1");var ur2= document.getElementById("ur2");var ur3= document.getElementById("ur3");var ur4= document.getElementById("ur4");
var ch1= document.getElementById("ch1");var ch2= document.getElementById("ch2");var ch3= document.getElementById("ch3");var ch4= document.getElementById("ch4");
var pa1= document.getElementById("pa1");var pa2= document.getElementById("pa2");var pa3= document.getElementById("pa3");var pa4= document.getElementById("pa4");

var co1= document.getElementById("co1");var co2= document.getElementById("co2");var co3= document.getElementById("co3");var co4= document.getElementById("co4");
var br1= document.getElementById("br1");var br2= document.getElementById("br2");var br3= document.getElementById("br3");var br4= document.getElementById("br4");
var ca1= document.getElementById("ca1");var ca2= document.getElementById("ca2");var ca3= document.getElementById("ca3");var ca4= document.getElementById("ca4");
var ve1= document.getElementById("ve1");var ve2= document.getElementById("ve2");var ve3= document.getElementById("ve3");var ve4= document.getElementById("ve4");
var ec1= document.getElementById("ec1");var ec2= document.getElementById("ec2");var ec3= document.getElementById("ec3");var ec4= document.getElementById("ec4");
var pe1= document.getElementById("pe1");var pe2= document.getElementById("pe2");var pe3= document.getElementById("pe3");var pe4= document.getElementById("pe4");

document.getElementById("ar1").addEventListener("click", function(){ar2.checked  = false; ar3.checked  = false; ar4.checked=false; document.getElementById("_1a").style.background ="orange"; document.getElementById("1a").innerText = "Argentina"});
document.getElementById("ar2").addEventListener("click", function(){ar1.checked  = false; ar3.checked  = false; ar4.checked=false; document.getElementById("_2a").style.background ="orange"; document.getElementById("2a").innerText = "Argentina"});
document.getElementById("ar3").addEventListener("click", function(){ar1.checked  = false; ar2.checked  = false; ar4.checked=false; document.getElementById("_3a").style.background ="orange"; document.getElementById("3a").innerText = "Argentina"});
document.getElementById("ar4").addEventListener("click", function(){ar1.checked  = false; ar2.checked  = false; ar3.checked=false; document.getElementById("_4a").style.background ="orange"; document.getElementById("4a").innerText = "Argentina"});

document.getElementById("au1").addEventListener("click", function(){au2.checked  = false; au3.checked  = false; au4.checked=false; document.getElementById("_1a").style.background ="orange"; document.getElementById("1a").innerText = "Australia"});
document.getElementById("au2").addEventListener("click", function(){au1.checked  = false; au3.checked  = false; au4.checked=false; document.getElementById("_2a").style.background ="orange"; document.getElementById("2a").innerText = "Australia"});
document.getElementById("au3").addEventListener("click", function(){au1.checked  = false; au2.checked  = false; au4.checked=false; document.getElementById("_3a").style.background ="orange"; document.getElementById("3a").innerText = "Australia"});
document.getElementById("au4").addEventListener("click", function(){au1.checked  = false; au2.checked  = false; au3.checked=false; document.getElementById("_4a").style.background ="orange"; document.getElementById("4a").innerText = "Australia"});

document.getElementById("bo1").addEventListener("click", function(){bo2.checked  = false; bo3.checked  = false; bo4.checked=false; document.getElementById("_1a").style.background ="orange"; document.getElementById("1a").innerText = "Bolivia"});
document.getElementById("bo2").addEventListener("click", function(){bo1.checked  = false; bo3.checked  = false; bo4.checked=false; document.getElementById("_2a").style.background ="orange"; document.getElementById("2a").innerText = "Bolivia"});
document.getElementById("bo3").addEventListener("click", function(){bo1.checked  = false; bo2.checked  = false; bo4.checked=false; document.getElementById("_3a").style.background ="orange"; document.getElementById("3a").innerText = "Bolivia"});
document.getElementById("bo4").addEventListener("click", function(){bo1.checked  = false; bo2.checked  = false; bo3.checked=false; document.getElementById("_4a").style.background ="orange"; document.getElementById("4a").innerText = "Bolivia"});

document.getElementById("ur1").addEventListener("click", function(){ur2.checked  = false; ur3.checked  = false; ur4.checked=false; document.getElementById("_1a").style.background ="orange"; document.getElementById("1a").innerText = "Uruguay"});
document.getElementById("ur2").addEventListener("click", function(){ur1.checked  = false; ur3.checked  = false; ur4.checked=false; document.getElementById("_2a").style.background ="orange"; document.getElementById("2a").innerText = "Uruguay"});
document.getElementById("ur3").addEventListener("click", function(){ur1.checked  = false; ur2.checked  = false; ur4.checked=false; document.getElementById("_3a").style.background ="orange"; document.getElementById("3a").innerText = "Uruguay"});
document.getElementById("ur4").addEventListener("click", function(){ur1.checked  = false; ur2.checked  = false; ur3.checked=false; document.getElementById("_4a").style.background ="orange"; document.getElementById("4a").innerText = "Uruguay"});

document.getElementById("ch1").addEventListener("click", function(){ch2.checked  = false; ch3.checked  = false; ch4.checked=false; document.getElementById("_1a").style.background ="orange"; document.getElementById("1a").innerText = "Chile"});
document.getElementById("ch2").addEventListener("click", function(){ch1.checked  = false; ch3.checked  = false; ch4.checked=false; document.getElementById("_2a").style.background ="orange"; document.getElementById("2a").innerText = "Chile"});
document.getElementById("ch3").addEventListener("click", function(){ch1.checked  = false; ch2.checked  = false; ch4.checked=false; document.getElementById("_3a").style.background ="orange"; document.getElementById("3a").innerText = "Chile"});
document.getElementById("ch4").addEventListener("click", function(){ch1.checked  = false; ch2.checked  = false; ch3.checked=false; document.getElementById("_4a").style.background ="orange"; document.getElementById("4a").innerText = "Chile"});

document.getElementById("pa1").addEventListener("click", function(){pa2.checked  = false; pa3.checked  = false; pa4.checked=false; document.getElementById("_1a").style.background ="orange"; document.getElementById("1a").innerText = "Paraguay"});
document.getElementById("pa2").addEventListener("click", function(){pa1.checked  = false; pa3.checked  = false; pa4.checked=false; document.getElementById("_2a").style.background ="orange"; document.getElementById("2a").innerText = "Paraguay"});
document.getElementById("pa3").addEventListener("click", function(){pa1.checked  = false; pa2.checked  = false; pa4.checked=false; document.getElementById("_3a").style.background ="orange"; document.getElementById("3a").innerText = "Paraguay"});
document.getElementById("pa4").addEventListener("click", function(){pa1.checked  = false; pa2.checked  = false; pa3.checked=false; document.getElementById("_4a").style.background ="orange"; document.getElementById("4a").innerText = "Paraguay"});

//sddsfsdfsfsdfsd
document.getElementById("co1").addEventListener("click", function(){co2.checked  = false; co3.checked  = false; co4.checked=false; document.getElementById("_1b").style.background ="orange"; document.getElementById("1b").innerText = "Colombia"});
document.getElementById("co2").addEventListener("click", function(){co1.checked  = false; co3.checked  = false; co4.checked=false; document.getElementById("_2b").style.background ="orange"; document.getElementById("2b").innerText = "Colombia"});
document.getElementById("co3").addEventListener("click", function(){co1.checked  = false; co2.checked  = false; co4.checked=false; document.getElementById("_3b").style.background ="orange"; document.getElementById("3b").innerText = "Colombia"});
document.getElementById("co4").addEventListener("click", function(){co1.checked  = false; co2.checked  = false; co3.checked=false; document.getElementById("_4b").style.background ="orange"; document.getElementById("4b").innerText = "Colombia"});

document.getElementById("br1").addEventListener("click", function(){br2.checked  = false; br3.checked  = false; br4.checked=false; document.getElementById("_1b").style.background ="orange"; document.getElementById("1b").innerText = "Brasil"});
document.getElementById("br2").addEventListener("click", function(){br1.checked  = false; br3.checked  = false; br4.checked=false; document.getElementById("_2b").style.background ="orange"; document.getElementById("2b").innerText = "Brasil"});
document.getElementById("br3").addEventListener("click", function(){br1.checked  = false; br2.checked  = false; br4.checked=false; document.getElementById("_3b").style.background ="orange"; document.getElementById("3b").innerText = "Brasil"});
document.getElementById("br4").addEventListener("click", function(){br1.checked  = false; br2.checked  = false; br3.checked=false; document.getElementById("_4b").style.background ="orange"; document.getElementById("4b").innerText = "Brasil"});

document.getElementById("ca1").addEventListener("click", function(){ca2.checked  = false; ca3.checked  = false; ca4.checked=false; document.getElementById("_1b").style.background ="orange"; document.getElementById("1b").innerText = "Catar"});
document.getElementById("ca2").addEventListener("click", function(){ca1.checked  = false; ca3.checked  = false; ca4.checked=false; document.getElementById("_2b").style.background ="orange"; document.getElementById("2b").innerText = "Catar"});
document.getElementById("ca3").addEventListener("click", function(){ca1.checked  = false; ca2.checked  = false; ca4.checked=false; document.getElementById("_3b").style.background ="orange"; document.getElementById("3b").innerText = "Catar"});
document.getElementById("ca4").addEventListener("click", function(){ca1.checked  = false; ca2.checked  = false; ca3.checked=false; document.getElementById("_4b").style.background ="orange"; document.getElementById("4b").innerText = "Catar"});

document.getElementById("ve1").addEventListener("click", function(){ve2.checked  = false; ve3.checked  = false; ve4.checked=false; document.getElementById("_1b").style.background ="orange"; document.getElementById("1b").innerText = "Venezuela"});
document.getElementById("ve2").addEventListener("click", function(){ve1.checked  = false; ve3.checked  = false; ve4.checked=false; document.getElementById("_2b").style.background ="orange"; document.getElementById("2b").innerText = "Venezuela"});
document.getElementById("ve3").addEventListener("click", function(){ve1.checked  = false; ve2.checked  = false; ve4.checked=false; document.getElementById("_3b").style.background ="orange"; document.getElementById("3b").innerText = "Venezuela"});
document.getElementById("ve4").addEventListener("click", function(){ve1.checked  = false; ve2.checked  = false; ve3.checked=false; document.getElementById("_4b").style.background ="orange"; document.getElementById("4b").innerText = "Venezuela"});

document.getElementById("ec1").addEventListener("click", function(){ec2.checked  = false; ec3.checked  = false; ec4.checked=false; document.getElementById("_1b").style.background ="orange"; document.getElementById("1b").innerText = "Ecuador"});
document.getElementById("ec2").addEventListener("click", function(){ec1.checked  = false; ec3.checked  = false; ec4.checked=false; document.getElementById("_2b").style.background ="orange"; document.getElementById("2b").innerText = "Ecuador"});
document.getElementById("ec3").addEventListener("click", function(){ec1.checked  = false; ec2.checked  = false; ec4.checked=false; document.getElementById("_3b").style.background ="orange"; document.getElementById("3b").innerText = "Ecuador"});
document.getElementById("ec4").addEventListener("click", function(){ec1.checked  = false; ec2.checked  = false; ec3.checked=false; document.getElementById("_4b").style.background ="orange"; document.getElementById("4b").innerText = "Ecuador"});

document.getElementById("pe1").addEventListener("click", function(){pe2.checked  = false; pe3.checked  = false; pe4.checked=false; document.getElementById("_1b").style.background ="orange"; document.getElementById("1b").innerText = "Perú"});
document.getElementById("pe2").addEventListener("click", function(){pe1.checked  = false; pe3.checked  = false; pe4.checked=false; document.getElementById("_2b").style.background ="orange"; document.getElementById("2b").innerText = "Perú"});
document.getElementById("pe3").addEventListener("click", function(){pe1.checked  = false; pe2.checked  = false; pe4.checked=false; document.getElementById("_3b").style.background ="orange"; document.getElementById("3b").innerText = "Perú"});
document.getElementById("pe4").addEventListener("click", function(){pe1.checked  = false; pe2.checked  = false; pe3.checked=false; document.getElementById("_4b").style.background ="orange"; document.getElementById("4b").innerText = "Perú"});

/*---------------*/
document.getElementById("2b_").addEventListener("click", function(){
    document.getElementById("s1").innerText=document.getElementById("2b").innerText        
})
document.getElementById("3a_").addEventListener("click", function(){
    document.getElementById("s1").innerText=document.getElementById("3a").innerText
})

document.getElementById("1b_").addEventListener("click", function(){
    document.getElementById("s2").innerText=document.getElementById("1b").innerText
})
document.getElementById("4a_").addEventListener("click", function(){
    document.getElementById("s2").innerText=document.getElementById("4a").innerText
})

/*---------------*/
document.getElementById("2a_").addEventListener("click", function(){
    document.getElementById("s3").innerText=document.getElementById("2a").innerText
})
document.getElementById("3b_").addEventListener("click", function(){
    document.getElementById("s3").innerText=document.getElementById("3b").innerText
})

document.getElementById("1a_").addEventListener("click", function(){
    document.getElementById("s4").innerText=document.getElementById("1a").innerText
})
document.getElementById("4b_").addEventListener("click", function(){
    document.getElementById("s4").innerText=document.getElementById("4b").innerText
})
/////////////////////////

document.getElementById("s1_").addEventListener("click", function(){
    document.getElementById("final1").innerText=document.getElementById("s1").innerText
})
document.getElementById("s2_").addEventListener("click", function(){
    document.getElementById("final1").innerText=document.getElementById("s2").innerText
})

document.getElementById("s3_").addEventListener("click", function(){
    document.getElementById("final2").innerText=document.getElementById("s3").innerText
})
document.getElementById("s4_").addEventListener("click", function(){
    document.getElementById("final2").innerText=document.getElementById("s4").innerText
})
</script>
<style>.table td, .table th {vertical-align: middle;}</style>
</div>

</div>
@endsection