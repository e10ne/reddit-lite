<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubredditController;

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

Route::get("/", [SubredditController::class, "index"])->name("/");
Route::get("/create", [SubredditController::class, "create"])->middleware(["auth", "verified"]);
Route::post("/create", [SubredditController::class, "store"])->middleware(["auth", "verified"]);
Route::get("/r/{title}", [SubredditController::class, "show"]);

Route::get("/r/{title}/create", [PostController::class, "create"])->middleware(["auth", "verified"])->name("post.create");
Route::post("/r/{title}/create", [PostController::class, "store"])->middleware(["auth", "verified"])->name("post.store");
Route::get("/r/{title}/{postID}", [PostController::class, "show"]);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
