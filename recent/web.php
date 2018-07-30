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
/*
Route::get('new-page',function(){
	return view('new-page1');
});

Route::get('new-page1',function(){
	return view('new-page1');
})->name('new-page1');

Route::get('new-page2',function(){
	return view('new-page2');
})->name('new-page2');




Route::get('/aw/{text}',function($text){
	return view('aw',array('text' => $text));
});

*/
Route::get('/foo',function(){
	return view('foo');
})->name('foo');

Route::get('/bar',function(){
	return view('bar');
})->name('bar');


Route::get('/shoutout/{text}', function($text){
	$colors = array(
					"red"   => "for passion",
					"green" => "color of nature",
					"blue"  => "it is the color of the sky",
					"white" => "pureness",
					"black" => "being bold",
					"silver" => "authentic",
					"yellow" => "warmth"

					);
	$count = 1;

	return view('/shoutout',

					array(

							'text' => $text,
							'colors' => $colors
						 )
			  );


	
})->name('shoutout');