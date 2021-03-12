<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Register;
use App\Http\Livewire\About;
use App\Http\Livewire\Contacts;

Route::get('/', Home::class)->name('home');
Route::get('/aboutus', About::class)->name('about');
Route::get('/contacts', Contacts::class)->name('contacts');
Route::post('/contacts/send', [Contacts::class, 'send'])->name('contacts.send');

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
