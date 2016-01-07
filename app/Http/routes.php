<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('bonjour/{name}',['as'=> 'Première route', function($name){
    return "Bienvenu sur ma première route. Je suis $name";
}]);

Route::get('monsite', 'PremierController@index');

Route::get('article/{n}', function($n) {
    return view('article')->with('numero', $n);
})->where('n','[0-9]+');

Route::get('users','UsersController@getInfos');
Route::post('users', 'UsersController@postinfos');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

