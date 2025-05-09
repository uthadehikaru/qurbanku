<?php

use App\Livewire\LoginForm;
use App\Models\Animal;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $animals = Animal::available()->take(3)->latest()->get();
    return view('welcome', compact('animals'));
});
Route::get('/hewan-qurban/{type?}', function ($type = null) {
    $animals = Animal::available()->when($type, function ($query, $type) {
        return $query->where('type', $type);
    })->latest()->simplePaginate(9);
    return view('animals', compact('animals', 'type'));
});
Route::get('login', LoginForm::class)->name('login');
Route::get('logout', function () {
    Auth::logout();

    return redirect()->route('login');
})->name('logout');