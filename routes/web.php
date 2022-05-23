<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Controllers\StudentController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::middleware([EnsureTokenIsValid::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('student')->group(function () {
        Route::get('/', [StudentController::class, 'index'])->name('student');
        Route::post('/post', [StudentController::class, 'store'])->name('post.student');
        Route::get('/delete/{student}', [StudentController::class, 'destroy'])->name('destroy.student');
        Route::get('/{student}', [StudentController::class, 'show'])->name('show.student');
        Route::post('/update', [StudentController::class, 'update'])->name('update.student');

    });

    Route::prefix('setting')->group(function () {
        Route::get('/', [SettingController::class, 'index'])->name('setting');
    });

    Route::prefix('period')->group(function () {
        Route::get('/{period}', [PeriodController::class, 'show'])->name('show.period');
        Route::post('/', [PeriodController::class, 'store'])->name('post.period');
        Route::get('/delete/{period}', [PeriodController::class, 'destroy'])->name('destroy.period');
        Route::post('/update', [PeriodController::class, 'update'])->name('update.period');
    });

    Route::prefix('classes')->group(function () {
        Route::get('/', [ClassesController::class, 'index'])->name('classes');
        Route::get('/{classes}', [ClassesController::class, 'show'])->name('show.classes');
        Route::post('/', [ClassesController::class, 'store'])->name('post.classes');
        Route::get('/delete/{classes}', [ClassesController::class, 'destroy'])->name('destroy.classes');
        Route::post('/update', [ClassesController::class, 'update'])->name('update.classes');
    });






    // Route::get('/student', function () {
    //     return view('student');
    // })->name('student');
    Route::get('/transaction', function () {
        return view('transaction');
    })->name('transaction');
    Route::get('/report', function () {
        return view('report');
    })->name('report');
    Route::get('/report', function () {
        return view('report');
    })->name('report');
    // Route::get('/setting', function () {
    //     return view('setting');
    // })->name('setting');
});
require __DIR__ . '/auth.php';
