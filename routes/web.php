<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "PageController@home")->name('home');

Route::get('/solutions', "PageController@solutions")->name('solution');

Route::get('/solutions/web', "PageController@web")->name('solution_web');

Route::get('/solutions/digital', "PageController@digital")->name('solution_digital');

Route::get('/solutions/business', "PageController@business")->name('solution_business');

Route::get('/about/contact', "PageController@contact")->name('about_contact');

Route::get('/about/why-vantworks', "PageController@aboutWhy")->name('about_why');

Route::get('/about/our-work', "PageController@aboutOur")->name('about_our');

Route::get('/about', "PageController@about")->name('about');

Route::get('/about/our-process', "PageController@process")->name('process');

Route::get('/about/privacy', "PageController@privacy")->name('privacy');

Route::get('/about/cookie', "PageController@cookie")->name('cookie');

Route::post('/leads/', "LeadController@store")->name('leads');
