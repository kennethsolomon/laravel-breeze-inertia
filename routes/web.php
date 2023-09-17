<?php

use App\Http\Apis\DearApi;
use App\Http\Apis\TestApi;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestingController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// DEMO
// Route::get('/testing', [TestingController::class, 'deleteCategory'])->name('delete.category');
// Route::get('/testing', [TestingController::class, 'addCategory'])->name('post.category');
// Route::get('/testing', [TestingController::class, 'getSaleLists'])->name('get.saleList');
// Route::get('/testing-demo', function () {
    // return (new DearApi)->get('saleList');
    // return (new DearApi)->get('saleList', [
    //     'Page' => '5'
    // ]);

    // return (new TestApi)->get('comments');
    // return (new TestApi)->get('comments', [
    //     'postId' => '2'
    // ]);
// });

require __DIR__.'/auth.php';


