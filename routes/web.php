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

Route::get('/', function () {
    return view('welcome');
});

/* metode match ini kita bisa menampung 2 atau lebih http verb atau kata kunci route seperti get, post, put, patch,dll. jadi 1 fungsi kontroller yang bertanggungjawab untuk menangani beberapa kata kerja tadi. */


/* 
	prefix ini nanti kita bisa membuat route default misal ingin halaman di load berdasarkan /admin/blog jadi tidak perlu lgi menulis di setiap route untuk method2 /admin/blog sehingga kita bisa menaruh semua dibawah prefix /admin/blog  contohnya: dengan method group semua di taruh dalam prefix blog. 
	sehingga bisa dihilangkan kata di url yg ada nama blog. 
	
	dalam hal ini saya tidak hilangkan sehingga saya akan mengakses di url /blog/blog2
	
*/

/* 
	resource controller yaitu dengan menggunakan 1 line bisa membuat sistem CRUD yaitu dengan php artisan make:controller NamaController --resource  
	
	dibuktikan dengan cara php artisan route:list untuk melihat endpoint pada users
 */
//mendaftarkan Route pada resource di controller
Route::resource('users','UserController');
 
Route::group(['prefix'=> 'blog'], function(){
	Route::match(['get','post'],'/blog2/testing','Blog2Controller@testing')->name('test');
	
	//metode2 yg sering di pakai index, show, dll
	Route::get('/blog','BlogController@index');
	Route::get('/blog/{id}','BlogController@show');

	//laravel crud eloquent
	Route::get('/blog1','Blog1Controller@index');
	Route::get('/blog1/{id}','Blog1Controller@show');

	//crud with other routes
	Route::get('/blog2','Blog2Controller@index');
	Route::get('/blog2/create','Blog2Controller@create');
	Route::post('/blog2','Blog2Controller@store');

	Route::get('/blog2/{id}','Blog2Controller@show');

	Route::get('/blog2/{id}/edit','Blog2Controller@edit');
	Route::put('/blog2/{id}','Blog2Controller@update');

	Route::delete('/blog2/{id}','Blog2Controller@destroy');
});


