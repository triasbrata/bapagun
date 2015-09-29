<?php 

Route::get('/', function () {
	return redirect()->route('sesi.login.form');
});
/**
 *  bagian login system
 */
Route::group(['prefix'=>'sesi','as'=>'sesi.','middleware'=>'UAC:guest'],function ()
{
	Route::get('/',function ()
	{
		return redirect()->route('sesi.login.form');
	});
	Route::get('login',['as'=>'login.form','uses'=>'SesiController@form']);
	Route::post('login',['as'=>'login.send','uses'=>'SesiController@login']);
	Route::get('logout',['as'=>'logout','uses'=>'SesiController@logout']);
});