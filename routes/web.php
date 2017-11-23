<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Cars;

Route::get('/', function () {

//	$owner = \App\Owners::find(1);
//	$car = new \App\Cars();
//	$car->name = '123';
//	$owner->car()->save($car);


	$car = Cars::find(1);

	$owner = \App\Owners::find(2);

	$car->owners()->associate($owner)->save();
});
