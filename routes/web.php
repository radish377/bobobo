<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/form-receive', function () {;
    //var_dump($_GET["name"]);
    echo "<h1>boo</h1>";
    echo "<p>" . $_GET["name"] . "</p>";
    echo "<p>" . $_GET["feedback"] . "</p>";

});

Route::get('/feedback/{id}', [FeedbackController::class, 'show']);