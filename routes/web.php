<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;


Route::get('/admin', function () {
    return redirect('/admin/login');
});
Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::resource('news', NewsController::class);

        Route::resource('categories', CategoryController::class);
        Route::post('/categories/get-sub-categories', [CategoryController::class, 'getSubCategories']);

        Route::resource('sub-categories', SubCategoryController::class);
        Route::post('/sub-categories/get-sub-categories', [SubCategoryController::class, 'getSubCategories']);

        Route::resource('contacts', ContactController::class);
    });
});
require __DIR__ . '/auth.php';

Route::get('/', [WebController::class, 'index'])->name('web.index');

Route::get('/news', [WebController::class, 'news'])->name('web.news');
Route::get('/news/{category}', [WebController::class, 'newsCategory'])->name('web.news-category');
Route::get('/news/{category}/{sub_category}', [WebController::class, 'newsSubCategory'])->name('web.news-sub-category');
Route::get('/news/{category}/{sub_category}/{news}', [WebController::class, 'newsDetail'])->name('web.news-detail');

Route::get('/research', [WebController::class, 'research'])->name('web.research');
Route::get('research/{category}', [WebController::class, 'researchCategory'])->name('web.research-category');
Route::get('/research/{category}/{sub_category}', [WebController::class, 'researchSubCategory'])->name('web.research-sub-category');
Route::get('/research/{category}/{sub_category}/{news}', [WebController::class, 'researchDetail'])->name('web.research-detail');

Route::get('/about', [WebController::class, 'about'])->name('web.about');
Route::get('/about/{category}', [WebController::class, 'aboutCategory'])->name('web.about-category');
Route::get('/about/{category}/{sub_category}', [WebController::class, 'aboutSubCategory'])->name('web.about-sub-category');

Route::get('/academics', [WebController::class, 'academics'])->name('web.academics');
Route::get('/academics/{category}', [WebController::class, 'academicsCategory'])->name('web.academics-category');
Route::get('/academics/{category}/{sub_category}', [WebController::class, 'academicsSubCategory'])->name('web.academics-sub-category');
Route::get('/academics/{category}/{sub_category}/{news}', [WebController::class, 'academicsDetail'])->name('web.academics-detail');

Route::get('/alumni', [WebController::class, 'alumni'])->name('web.alumni');
Route::get('/alumni/{category}', [WebController::class, 'alumniCategory'])->name('web.alumni-category');
Route::get('/alumni/{category}/{sub_category}', [WebController::class, 'alumniSubCategory'])->name('web.alumni-sub-category');
Route::get('/alumni/{category}/{sub_category}/{news}', [WebController::class, 'alumniDetail'])->name('web.alumni-detail');

Route::get('/contact', [WebController::class, 'contact'])->name('web.contact');
Route::post('/contact/post-contact', [WebController::class, 'postContact'])->name('web.post-contact');
