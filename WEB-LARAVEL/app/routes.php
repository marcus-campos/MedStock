<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::pattern('person', '[0-9]+');

Route::get('/', function()
{
    return View::make('login_v2');
}); //Pagina Inicial

Route::get('person', 'PersonController@pageMake');
Route::get('login', 'UsuariosController@login');
Route::post('login', 'UsuariosController@validate');

Route::group(array('before' => 'auth'), function (){
	Route::get('logout', array('uses' => 'UsuariosController@logout', 'as' => 'login_v2'));
	Route::get('welcome', array('uses' => 'UsuariosController@welcome', 'as' => 'index'));
	Route::resource('usuario', 'UsuariosController');		
  Route::get('person/{person}/delete', 'PersonController@delete');
  Route::post('person', 'PersonController@save');
});
//Route::controller('DashboardController');
