<?php


Route::get("/", 'FrontController@index');
Route::get('/simulador-copa', function () {     return view('front.simulador2');});
Route::get('/simulador','SimuladorController@simulador');
Route::post('/simulador','SimuladorController@simuladorguardar');

Route::get('/supersimulador','SimuladorController@supersimulador');
Route::post('/supersimulador/ajaxgenera', 'SimuladorController@ajaxgenera');
Route::get('/ruleta', function () {     return view('front.ruleta');});

//Route::post('/simulador/ajaxbusca', 'FrontController@ajaxbusca');

Route::get('/simulador/predicciones', 'SimuladorController@index');
Route::get('/simulador/predicciones/{nombre}', 'SimuladorController@nombre');
Route::post('/simulador/predicciones/{nombre}', 'SimuladorController@guardar');
Route::get('/cards/{nombre}', 'SimuladorController@prediccion');

Route::get("/hincha", 'HinchasController@index');
Route::get("/hincha/{hincha}", 'HinchasController@hincha');
Route::post('/hincha/{hincha}', 'HinchasController@guardar');
Route::get('/h/{slug}', 'HinchasController@generado');

Route::get('/privacidad', function () {     return view('front.politicas-y-privacidad');});

Route::get("/encuesta","FrontController@encuesta");
Route::post("/encuesta","FrontController@encuestarecibir");

Route::get("/predicciones/grupo-a","FrontController@grupoa");
Route::post("/predicciones/grupo-a","FrontController@grupoasave");
Route::get("/predicciones/grupo-b","FrontController@grupob");
Route::post("/predicciones/grupo-b","FrontController@grupobsave");
Route::get("/predicciones/grupo-c","FrontController@grupoc");
Route::post("/predicciones/grupo-c","FrontController@grupocsave");


Route::get("/calendario","FixtureController@index");
Route::get("/calendario/fase-de-grupos","FixtureController@fasedegrupos");
Route::get("/calendario/cuartos-de-final","FixtureController@cuartosdefinal");
Route::get("/calendario/semifinal","FixtureController@semifinal");
Route::get("/calendario/final","FixtureController@final");


Route::get("/grupos","FixtureController@grupos");
Route::get("/grupos/{grupo}","FixtureController@gruposletra");
Route::get("/tabla-posiciones","FixtureController@tablaposiciones");



Route::get('fcm_token', ['as'=>'fcm_token','uses'=>'JsonController@fcm_token']);	
Route::get('notificacion/{id}', ['as'=>'notificacion','uses'=>'JsonController@notificacion']);


Route::resource('json', 	'JsonController');
Route::get('jsonfixture', 	'JsonController@fixture');
// flutter
Route::get('copafixture', 	'JsonController@flutterfixture');


Auth::routes();
Route::group(['prefix' => 'admin', 	'middleware' => ['web']], function() {    
    Route::resource('peru',        'Admin\FirebaseController',	    ['as'=>'admin']);
    Route::resource('hinchas',      'Admin\HinchasController',	    ['as'=>'admin']);
    Route::resource('noticias', 	'Admin\NoticiasController',	    ['as'=>'admin']);	
    Route::resource('categorias', 	'Admin\CategoriasController',	['as'=>'admin']);		
    Route::resource('equipos', 	    'Admin\EquiposController',	    ['as'=>'admin']);		
    Route::resource('calendarios', 	'Admin\CalendariosController',	['as'=>'admin']);		
    Route::resource('predicciones', 'Admin\PrediccionesController',	['as'=>'admin']);	
    Route::resource('jugadores', 	'Admin\JugadoresController',	['as'=>'admin']);		
});



Route::get("/{categoria}","FrontController@categoria");
Route::get("/seleccion/{equipo}","SeleccionController@seleccion");
Route::get("/seleccion/{equipo}/{jugador}","SeleccionController@jugador");
Route::get("/{categoria}/{noticia}","FrontController@noticia");
Route::get('/home', 'HomeController@index')->name('home');
