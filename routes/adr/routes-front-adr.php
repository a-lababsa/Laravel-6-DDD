<?php

use Illuminate\Support\Facades\Route;
use App\Http\Actions\Front;
use App\Http\Actions\Front\Selfcare;

Route::any('/', Front\IndexAction::class)->name('index');
Route::get('/connected', Selfcare\IndexAction::class)->name('connected');
