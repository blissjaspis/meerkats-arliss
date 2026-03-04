<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Welcome;
use App\Livewire\About;
use App\Livewire\Product;
use App\Livewire\Machinery;
use App\Livewire\Contact;

Route::get('/', Welcome::class)->name('welcome');
Route::get('/about', About::class)->name('about');
Route::get('/products', Product::class)->name('products');
Route::get('/machinery', Machinery::class)->name('machinery');
Route::get('/contact', Contact::class)->name('contact');