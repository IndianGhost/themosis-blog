<?php

/**
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */

Route::get('home', function()
{
    return view('welcome');
});

Route::get('about', 'Example@about')
    ->name('about')
;

Route::get('contact', 'Example@contact')
    ->name('contact')
;