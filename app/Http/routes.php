<?php

use AlfredNutileInc\Incomings\IncomingsFacade;
use AlfredNutileInc\Incomings\Log;


Route::get('api/v1/blogs', function() {

    return \App\Blog::all();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('angular', function() {
   return view('angular');
});

Route::resource("blogs","BlogController");


Route::resource("comments","CommentController");

Route::get('incomings', ['middleware' => 'incomings', function() {

    return "Send to incomings!";

}]);