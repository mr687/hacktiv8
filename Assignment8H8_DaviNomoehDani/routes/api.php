<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('v1/products', ProductController::class)
    ->except('create', 'edit');