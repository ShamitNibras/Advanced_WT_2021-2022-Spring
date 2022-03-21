<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;

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
    return view('login');
});

Route::get('/login', [ManagerController::class, 'login'])->name('login');
Route::post('/login', [ManagerController::class, 'loginSubmit'])->name('login');

Route::get('/dashboard', [ManagerController::class, 'dashboard'])->name('dashboard')->middleware("validManager");

Route::get('/registration', [ManagerController::class, 'registration'])->name('registration')->middleware("validManager");
Route::post('/registration', [ManagerController::class, 'registrationSubmit'])->name('registration')->middleware("validManager");;

Route::get('/logout', [ManagerController::class, 'logout'])->name('logout')->middleware("validManager");;

Route::get('/profile', [ManagerController::class, 'profile'])->name('profile')->middleware("validManager");;

Route::get('/updateProfile', [ManagerController::class, 'updateProfile'])->name('updateProfile')->middleware("validManager");;
Route::post('/updateProfile', [ManagerController::class, 'updateProfileSubmit'])->name('updateProfile')->middleware("validManager");;

Route::get('/seeTask', [ManagerController::class, 'seeTask'])->name('seeTask')->middleware("validManager");;

Route::get('/seeStaff', [ManagerController::class, 'seeStaff'])->name('seeStaff')->middleware("validManager");;

Route::post('/assigned', [ManagerController::class, 'assigned'])->name('assigned')->middleware("validManager");;
