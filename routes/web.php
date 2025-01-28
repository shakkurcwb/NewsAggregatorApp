<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/live');

# Rss Feeds - Resources
Route::get('/rss-feeds', [\App\Http\Controllers\RssFeedController::class, 'index']);
Route::get('/rss-feeds/create', [\App\Http\Controllers\RssFeedController::class, 'create']);
Route::post('/rss-feeds', [\App\Http\Controllers\RssFeedController::class, 'store']);
Route::get('/rss-feeds/{feed}', [\App\Http\Controllers\RssFeedController::class, 'show']);
Route::get('/rss-feeds/{feed}/edit', [\App\Http\Controllers\RssFeedController::class, 'edit']);
Route::put('/rss-feeds/{feed}', [\App\Http\Controllers\RssFeedController::class, 'update']);
Route::delete('/rss-feeds/{feed}', [\App\Http\Controllers\RssFeedController::class, 'destroy']);

# Rss Feeds - Actions
Route::post('/rss-feeds/{feed}/pull', [\App\Http\Controllers\RssFeedController::class, 'pull']);

# Articles - Resources
Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'index']);
Route::get('/articles/{article}', [\App\Http\Controllers\ArticleController::class, 'show']);

# Live Search
Route::get('/live', [\App\Http\Controllers\LiveController::class, 'index']);
