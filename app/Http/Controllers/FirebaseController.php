<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use App\noticias;

class FirebaseController extends Controller
{
  
  public function __construct(){ }

  public function index(){ }
  
  public function store(){
    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/copaamerica-75c85-firebase-adminsdk-kb3ix-c832f40a00.json');
		$firebase 		  = (new Factory)
                        ->withServiceAccount($serviceAccount)
                        ->withDatabaseUri('https://copaamerica-75c85.firebaseio.com/')                        
                        ->create();

		$database 	=   $firebase->getDatabase();
    $snapshot 	=   $database->getReference('Noticias')
    ->push([
      'id'  =>  "03330202002",
      'nombre' => "Perú Jugará contra alemania e 29 de",
      'descripcion' => "pROGBABILIDAD",
      'urlfoto' => 'https://app.domain.tld',
      'visitas' =>  1,
      'created_at'  => '10/2/2019'
     ]);

    //$snapshot 	=   $database->getReference();
    $n   =   $snapshot->getSnapshot();
       //$value      =   $snapshot->getValue();
    //echo $n->nombre;
    foreach($n->getValue() as $key)
     echo $key;
    //var_dump($n->getValue());

                    
                                //print_r($newPost->getvalue());
  }

}
