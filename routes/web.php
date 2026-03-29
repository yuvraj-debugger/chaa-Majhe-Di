<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FranchiseController;
use App\Models\Gallery;
use App\Models\Menu;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    $galleries = Gallery::latest()->get();
    $menus = Menu::latest()->get();
    return view('welcome', compact('galleries', 'menus'));
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/franchise', [FranchiseController::class, 'store'])->name('franchise.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('users', UserController::class);
    Route::resource('contacts', ContactController::class)->only(['index', 'show', 'destroy']);
    Route::resource('franchises', FranchiseController::class)->only(['index', 'destroy']);
    Route::resource('galleries', GalleryController::class);
    Route::resource('menus', MenuController::class);

    Route::get('/items', function () {
        return view('inventory.items');
    })->name('items.index');

    Route::get('/expenses', function () {
        return view('activities.expenses');
    })->name('expenses.index');

    Route::get('/purchases', function () {
        return view('activities.purchases');
    })->name('purchases.index');

    Route::get('/sales', function () {
        return view('activities.sales');
    })->name('sales.index');
});
