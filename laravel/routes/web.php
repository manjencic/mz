<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    // Render the existing /workspace/index.php content as the home page
    ob_start();
    include base_path('..'.DIRECTORY_SEPARATOR.'index.php');
    return response(ob_get_clean());
});

Route::get('/info', [BlogController::class, 'index'])->name('blog.index');
Route::get('/info/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');
