<?php

Breadcrumbs::register('home', function ($breadcrumbs) {
    
    $breadcrumbs->push('Главная', url('/'));
    
});

Breadcrumbs::register('books', function ($breadcrumbs) {
    
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Книги', url('/books'));
    
});

Breadcrumbs::register('book', function ($breadcrumbs, $book) {
    
    $breadcrumbs->parent('books');
    $breadcrumbs->push($book->Title, route('book.show', ['name' => $book ->Title]));
    
});

Breadcrumbs::register('authors', function ($breadcrumbs) {
    
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Авторы', url('/authors'));

});

Breadcrumbs::register('author', function ($breadcrumbs, $author) {
    
    $breadcrumbs->parent('authors');
    $breadcrumbs->push($author->Name, route('author.show', ['name' => $author ->Name]));

});


Breadcrumbs::register('genres', function ($breadcrumbs) {
    
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Категории', url('/genres'));

});


Breadcrumbs::register('genre', function ($breadcrumbs, $genre) {
    
    $breadcrumbs->parent('genres');
    $breadcrumbs->push($genre->Title, route('book.show', ['name' => $genre ->Title]));

});