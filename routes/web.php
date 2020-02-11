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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

// Route::get('/api/auto-bookmarks', 'StatisticsController@bookmarks');
// Route::post('/api/auto-bookmarks', 'StatisticsController@bookmarks');

Route::resource('/', 'IndexController',
    [
        'only' => ['index'],
        'names' => [
            'index' => 'home',
        ],
    ]
);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::resource('book', 'BookController', [
    'parameters' => [
        'book' => 'alias',
    ],
]);

Route::resource('book/{slug}/read', 'ContentBook', [
    
]);


Route::resource('books', 'BooksController', [
    'parameters' => [
        'books' => 'alias',
    ],
]);

Route::get('/authors', 'AuthorsController@index')->name('authors');
// Route::resource('authors', 'AuthorsController', [
//     'parameters' => [
//         'authors' => 'alias',
//     ],
// ]);



Route::resource('category', 'CategoriesController', [
    'parameters' => [
        'category' => 'alias',
    ],
]);

Route::resource('genre', 'GenreController', [
    'parameters' => [
        'category' => 'alias',
    ],
]);

Route::resource('categories', 'GenreController');

Route::resource('publisher', 'PublisherController', [
    'parameters' => [
        'publisher' => 'alias',
    ],
]);

Route::resource('content', 'ContentBook', [
    'parameters' => [
        'content' => 'alias',
    ],
]);

Route::resource('author', 'AuthorController', [
    'parameters' => [
        'author' => 'alias',
    ],
]);


Route::resource('profile', 'ProfileController', [

]);

Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');

Route::post('/rating/{post}', 'RatingController@postStar')->name('postStar');

Route::post('/profile/bookListAdd', 'ProfileController@addBookList')->name('bookListAdd');
Route::post('/profile/bookListRemove', 'ProfileController@removeBookList')->name('bookListRemove');

Route::post('/book/download', 'BookController@download')->name('downloadFile');

Route::get('qsearch', 'SearchController@searchIndex')->name('search');

Route::get('/search', 'SearchController@search');

Route::post('/auto-bookmarks', 'StatisticsController@AutoBookmarks');
Route::post('/bookmarks', 'StatisticsController@Bookmarks');
Route::post('/statistics', 'StatisticsController@Statistics');

Route::post('/author_filter', 'AuthorController@filter');

Route::post('/auth', 'Auth\LoginController@authenticate')->name('auth');
Route::post('/registration', 'Auth\RegisterController@registration')->name('registration');