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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/routes', 'HomeController@admin')->middleware('admin');
Route::resource('/', 'IndexController',
    [
        'only' => ['index'],
        'names' => [
            'index' => 'home'
        ]
    ]
);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::resource('book', 'BookController', [
    'parameters' => [
        'book' => 'alias'
    ]
]);


Route::resource('books', 'BooksController', [
    'parameters' => [
        'books' => 'alias'
    ]
]);


Route::resource('authors', 'AuthorsController', [
    'parameters' => [
        'authors' => 'alias'
    ]
]);

Route::resource('author', 'AuthorController', [
    'parameters' => [
        'author' => 'alias'
    ]
]);
Route::resource('search', 'SearchController', [

]);

Route::resource('profile', 'ProfileController', [

]);
Route::post('/rating/{post}', 'RatingController@postStar')->name('postStar');

Route::post('/search', 'SearchController@searchIndex')->name('search');
Route::get('/search', 'SearchController@search');

