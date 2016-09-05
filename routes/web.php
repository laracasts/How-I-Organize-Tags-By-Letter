<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect('tags');
});

Route::get('tags', function () {
    $tags = App\Tag::orderBy('name')->get()->groupBy(function ($tag) {
        return substr($tag->name, 0, 1);
    });

    return view('tags.index')->withTags($tags);
});
