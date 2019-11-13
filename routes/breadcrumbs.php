<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Главная страница', route('home'));
});

// Home > About
Breadcrumbs::register('authors', function ($trail) {
    $trail->parent('home');
    $trail->push('Авторы', route('authors'));
});

Breadcrumbs::register('author', function ($trail) {
    $trail->parent('home');
    $trail->push('author', route('author'));
});

// Home > Blog > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('category', $post->category);
    $trail->push($post->title, route('post', $post->id));
});