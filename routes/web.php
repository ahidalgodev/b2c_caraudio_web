<?php

use App\Http\Controllers\CatalogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CatalogController::class,'index']);

Route::get('/product/{id}', function ($id) {
    $product = App\Models\Product::find($id);
    return view('propuestas-product', ['product' => $product]);
});

Route::get('/propuestas', function () {
    return view('propuestas');
});

Route::get('/propuestas-navbar', function () {
    return view('propuestas-navbar');
});