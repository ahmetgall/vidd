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

/*
Route::get('/', function()
{
	return View::make('hello');
});
*/

Route::get('/', 'homecontroller@index');
Route::get('/vid', 'homecontroller@video');
Route::get('/append', 'homecontroller@app');
Route::post('/append', 'homecontroller@app');
Route::post('/admin', 'homecontroller@admin');
Route::get('/exit', 'homecontroller@exitt');

Route::get('/mod',array('before' => 'auth', function(){
	$dd=new HomeController;
	return $dd->moder();
	//Redirect::to('mod');
	
	}));

Route::get('/pub','homecontroller@pubb' );
Route::get('/del','homecontroller@dell' );
Route::get('/del2','homecontroller@dell2' );


Route::get('/edit',array('before' => 'auth', function(){
	$dd=new HomeController;
	return $dd->editt();
	//Redirect::to('mod');
	
	}));


Route::get('/ed', 'homecontroller@edd');
Route::post('/ed', 'homecontroller@edd');






?>
