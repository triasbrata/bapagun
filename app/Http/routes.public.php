<?php
Route::get('/',function ()
{
	return view('public.index');
});
Route::get('/bantuan',function ()
{
	return view('public.bantuan');
});
Route::get('/penerima',function ()
{
	return view('public.penerimabantuan');
});