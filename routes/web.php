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

Route::resource('author', 'AuthorController', [
    'parameters' => [
        'author' => 'alias',
    ],
]);

Route::resource('categories', 'CategoriesController', [
    'parameters' => [
        'categories' => 'alias',
    ],
]);

Route::resource('category', 'CategoriesController', [
    'parameters' => [
        'category' => 'alias',
    ],
]);


Route::resource('genre', 'GenreController', [
    'parameters' => [
        'genre' => 'alias',
    ],
]);

Route::resource('genres', 'GenreController', [
    'parameters' => [
        'genres' => 'alias',
    ],
]);



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

// Route::resource('profile', 'ProfileController', [

// ]);

Route::resource('profile', 'ProfileController', [
    'parameters' => [
        'profile' => 'alias',
    ],
])->middleware('auth');

Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');

Route::post('/rating/{post}', 'RatingController@postStar')->name('postStar');

Route::post('/profile/booklist', 'ProfileController@BookList')->name('booklist');
// Route::post('/profile/booklist', 'ProfileController@removeBookList')->name('bookListRemove');

Route::post('/book/download', 'BookController@download')->name('downloadFile');

Route::get('/qsearch', 'SearchController@searchIndex')->name('search');

Route::get('/qsearch/books', 'SearchController@books')->name('qsearch_book');
Route::get('/qsearch/authors', 'SearchController@authors')->name('qsearch_author');

Route::get('/search', 'SearchController@search');

Route::post('/auto-bookmarks', 'StatisticsController@AutoBookmarks');
Route::post('/bookmarks', 'StatisticsController@Bookmarks');
Route::post('/statistics', 'StatisticsController@Statistics');

Route::post('/author_filter', 'AuthorController@filter');

Route::post('/auth', 'Auth\LoginController@authenticate')->name('auth');
Route::post('/registration', 'Auth\RegisterController@registration')->name('registration');


Route::get('ajax', function(){ return view('ajax'); });

Route::post('/ajaxbook','AjaxController@books');