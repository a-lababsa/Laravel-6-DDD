<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Actions\Front;

//Route::any('/', Front\IndexAction::class)->name('index');

Auth::routes();
