<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DptController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\PaslonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Models\Voting;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\DptAuthController;
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
    return view('welcome');
});

Route::get('/rekap', function () {
    return view('admin.count.counts');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::resource('/dashboard/dpt', DptController::class);
    Route::post('/dashboard/dpt/{id}', [DptController::class, 'inputPassword'])->name('input.password');
    Route::resource('/dashboard/kandidat', PaslonController::class);
    Route::resource('/dashboard/rekapitulasi', CountController::class);
});

Route::get('/vote', [DptAuthController::class, 'index'])->name('voter.index');
Route::post('/vote', [DptAuthController::class, 'login'])->name('voter.login');
Route::post('/keluar', [DptAuthController::class, 'logout'])->name('voter.logout');

Route::group(['middleware' => ['auth:dpt']], function() {
    Route::get('vote/kandidat', [VoteController::class, 'kandidat'])->name('voting');
    Route::get('vote/kandidat/voting', [VoteController::class, 'voting'])->name('vote.kandidat');
    Route::post('vote/kandidat/voting', [VoteController::class, 'prosesvoting'])->name('proses.vote');
    Route::get('vote/kandidat/show/{id}', [VoteController::class, 'show'])->name('tampil.kandidat');
});
