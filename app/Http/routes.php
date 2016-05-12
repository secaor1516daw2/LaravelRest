<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Cuando usamos un controlador resource tenemos que implementar todos los métodos
// index, store, etc.. Aunque se pueden indicar en la ruta cuales no queremos con except
//Route::resource('users','UsersController');

// Creamos un Controlador para gestionar la autenticación en HomeController.
//Route::controller('/','HomeController');


Route::get('/','WelcomeController@index');

Route::get('home','HomeController@index');

Route::controllers{[
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]};

//devuelve solo texto
//Route::get('/', function () {
//    return 'welcome';
//});

//devuelve la vista
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/platoForm', function () {
    $plats = DB::table('plats')->distinct()->lists('tipus');
    return view('crearPlatoForm',compact('plats'));
});

Route::get('/crearPlato', function () {
    return view('crearPlato');
});

Route::get('/pruebasPlatos', function(){
    $plats = DB::table('plats')->distinct()->lists('tipus');
    dd($plats);
});


//Route::get('/mesa', function () {
//    return view('mesa');
//});
//
//Route::resource('admin/sections','AdminSectionsController');
//
Route::get('users',function(){
    User::create(["name"=>"Some Name",
                 "email" =>"email@email.com",
                 "password" => bcrypt("password")
                  ]);

    return User::all();
});

//Route::get('/home', function () {
//    return view('HomeController@index');
//});

//Route::controllers([
//    'auth' => 'Auth\AuthController',
//    'password' =>'Auth\PasswordController'
//]);

///notes/create
//devuelve arrat de notas
//Route::get('notes/create',function(){
//    return'[Create notes]';
//});

///notes/5 por ejemplo
//Route::get('notes/{note}/{slug?}',function($note,$slug=null){//interrogante para parmetro opcional,que se iguala a null pk pide parametro
//   //return $note;
//    dd($note,$slug);
//})->where('note','[0-9]+');//restricción de notas(solo numeros)
//Devuelve array tipo JSON
//Route::get('notes/create',function(){
//    return [
//        'notes' => 'create'
//    ];
//});

Route::get('notes',function(){

    $notes = Note::all();

    dd($notes);

    return view('notes');
});
