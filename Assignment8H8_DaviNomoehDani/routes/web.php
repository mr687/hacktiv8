<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => response()->json([
  'message' => 'no view.'
]));