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

Route::get('/', function () {
    return redirect('/blog');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categori', 'CategoryController@category_source_code')->name('categori.sourcecode')->middleware('auth');
Route::get('/category-ebook', 'CategoryController@category_ebook')->name('categori.ebook')->middleware('auth');;
Route::get('/data-source-code', 'HomeController@sourcecode')->name('sourcecode')->middleware('auth');;
Route::get('/data-ebook', 'HomeController@ebook')->name('ebook')->middleware('auth');;

Route::livewire('/source-code', 'category.category-sc-index')->name('categorysc.index');
Route::livewire('/source-code/{category:nama_category}', 'sourcecode.source-code-index')->name('sourcecode.index');
Route::livewire('/source-code/{category:nama_category}/{sourcecode:slug}', "sourcecode.sourcecode-show")->name('sourcecode.show');

Route::livewire('/download-ebook-informatika', 'category-ebook.category-ebook-index')->name('category_ebook.index');
Route::livewire('/download-ebook-informatika/{categoryebook:nama_category}', 'ebook.ebook-index')->name('ebook.index');

// blog

Route::get('/blog', 'BlogController@index')->name('blog.post');
Route::get('/blog/{slug}', 'BlogController@show')->name('blog.show');
Route::get('/tag/{slug}', 'BlogController@getPostsByTag')->name('blog.tag');
Route::get('/topic/{slug}', 'BlogController@getPostsByTopic')->name('blog.topic');

// social account
Route::get('auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\SocialiteController@handleProviderCallback');


