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

// Route::get('digit/{num}/{func}/{secNum}', function ($num,$func, $secNum) {
// 	switch ($func) {
// 		case '+':
// 			 return $num + $secNum ;
// 			break;
// 			case '*':
// 			 return $num *$secNum ;
// 			break;
// 			case '-':
// 			 return $num - $secNum ;
// 			break;
		
// 			case '/':
// 			 return $num / $secNum ;
// 			break;
// 			case '%':
// 				 return $num % $secNum ;
// 			break;		
// 	}
// })
// 	->where('num','[0-9]+')
// 	->where('func','[+-/*]{1}')
// 	->where('secNum','[0-9]+');



// Route::get('curCalc/{cur}/{val}/{newCur}/{inverse}', ['uses' => 'CurCalculateController@calc'])
// 	->where('cur','[A-Z]+')
// 	->where('val','[0-9]+')
// 	->where('newCur','[A-Z]+')
// 	->where('inverse','[0-1]{1}');

// Route::get('curCalc/help', ['uses' => 'CurCalculateController@help']);

// Route::get('/', ['uses' => 'BlogStartController@blogStart']);
 Route::get('auth', ['uses' => 'ArticleController@view']);

Route::group(['prefix' => 'article'], function(){
	Route::get('/', ['uses' => 'ArticleController@index', 'as' => 'article.create']);
	Route::get('comment', ['uses' => 'ArticleController@comment']);
	Route::get('create', ['uses' => 'ArticleController@create', 'as' => 'article.create']);
	Route::post('create', ['uses' => 'ArticleController@store', 'as' => 'article.store']);
});