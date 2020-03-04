<?php

Breadcrumbs::register('home', function ($breadcrumbs) {

    $breadcrumbs->push(__('Главная'), url('/'));

});

Breadcrumbs::register('books', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('Книги'), url('/books'));

});

Breadcrumbs::register('book', function ($breadcrumbs, $book) {

    $breadcrumbs->parent('books');
    $breadcrumbs->push($book->Title, route('book.show', ['name' => $book->Title]));

});

Breadcrumbs::register('authors', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('Авторы'), url('/authors'));

});

Breadcrumbs::register('author', function ($breadcrumbs, $author) {

    $breadcrumbs->parent('authors');
    $breadcrumbs->push($author->FirstName . ' ' . $author->LastName , route('author.show', ['name' => $author->FirstName . $author->LastName]));

});


Breadcrumbs::register('genres', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('Категории'), url('/genres'));

});


Breadcrumbs::register('genre', function ($breadcrumbs, $genre) {

    $breadcrumbs->parent('genres');
    $breadcrumbs->push($genre->Title, route('book.show', ['name' => $genre->Title]));

});

Breadcrumbs::register('search', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('Поиск'), url('/qsearch'));

});

Breadcrumbs::register('profile', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('Личный кабинет'), url('/profile'));

});
