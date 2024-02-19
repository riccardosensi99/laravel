<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class,'home'])->name('homePage');

Route::get('/chiSiamo',[PublicController::class,'user'])->name('userName');

Route::get('/user-detail/{id}',[PublicController::class,'userDetail'])->name('userDetail');

Route::get('/servizi', [PublicController::class,'servizi'])->name('service');


Route::get('/pagineDettaglio', [PublicController::class,'articles'])->name('articles');

Route:: get('/contact',[PublicController::class,'contact'])->name('contact');
Route:: post('/contact/submit',[PublicController::class,'contactSubmit'])->name('contactSubmit');

Route:: get('/article/create',[ArticleController::class,'create'])->name('article_create');
Route:: post('/article/store',[ArticleController::class,'store'])->name('article_store');

// rotte categorie
Route::get('/category/create', [CategoryController::class,'create'])->name('category_create');
Route::post('/category/store', [CategoryController::class,'store'])->name('category_store');
Route::get('/category/index',[CategoryController::class,'index'])->name('category_index');
Route::get('/category/show/{category}',[CategoryController::class,'show'])->name('category_show');
Route::get('/category/edit/{category}',[CategoryController::class,'edit'])->name('category_edit');
Route::put('/category/update/{category}',[CategoryController::class,'update'])->name('category_update');
Route::delete('/category/delete/{category}',[CategoryController::class,'destroy'])->name('category_delete');



