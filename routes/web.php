<?php

use App\Post;
use Illuminate\Support\Facades\Route;

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


/*********Public Route */


Route::get('post-details/{category}','SiteController@show')->name('post-details');
Route::get('/', function () {

    $posts = Post::orderby('id');
    return view('index', compact('post'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/manage-post', 'Admin\PostController@show')->name('manage.post');
Route::get('/create-post', 'Admin\PostController@index')->name('createpost');
Route::post('/save-post', 'Admin\PostController@store')->name('save.post');
Route::get('/delete-post/{id}', 'Admin\PostController@delete')->name('delete');
Route::get('/edit-post/{slug}', 'Admin\PostController@edit')->name('edit');
Route::post('/update-post', 'Admin\PostController@update')->name('update.post');

/*************Add Admin ********** */

Route::get('/add-admin', 'Admin\AdminController@index')->name('admin.register');
Route::post('/save-admin', 'Admin\AdminController@store')->name('save.admin');
Route::get('/delete-admin/{id}', 'Admin\AdminController@delete')->name('admin.delete');
