<?php

Breadcrumbs::register('home', function ($breadcrumbs) {
    
    $breadcrumbs->push(__('Home'), url('/'));
    
});

Breadcrumbs::register('books', function ($breadcrumbs) {
    
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('Books'), url('/books'));
    
});

Breadcrumbs::register('book', function ($breadcrumbs, $book) {
    
    $breadcrumbs->parent('books');
    $breadcrumbs->push($book->Title, route('book.show', ['name' => $book->Title]));
    
});

Breadcrumbs::register('authors', function ($breadcrumbs) {
    
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('Authors'), url('/authors'));
    
});

Breadcrumbs::register('author', function ($breadcrumbs, $author) {
    
    $breadcrumbs->parent('authors');
    $breadcrumbs->push($author->FirstName . ' ' . $author->LastName , route('author.show', ['name' => $author->FirstName . $author->LastName]));
    
});


Breadcrumbs::register('genres', function ($breadcrumbs) {
    
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('Categories'), url('/genres'));
    
});


Breadcrumbs::register('genre', function ($breadcrumbs, $genre) {
    
    $breadcrumbs->parent('genres');
    $breadcrumbs->push($genre->Title, route('book.show', ['name' => $genre->Title]));
    
});

Breadcrumbs::register('search', function ($breadcrumbs) {
    
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('Поиск'), url('/qsearch'));
    
});

