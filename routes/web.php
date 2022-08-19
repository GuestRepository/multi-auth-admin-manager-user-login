<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;
  
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
  
// Route::get('/', function () {
//     return view('welcome');
// });
 Route::get('/',[GuestController::class, 'welcomePage'])->name('welcome'); 

Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/


Route::get('user-dashboard', [HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'is_admin:admin'])->group(function () {
    Route::get('/admin-dashboard', [HomeController::class, 'adminHome'])->name('admin.home');
});

Route::middleware(['auth', 'is_admin:manager'])->group(function () {
    Route::get('/manager-dashboard', [HomeController::class, 'managerDashboard'])->name('manager.dashboard');
});

// Route::get('admin-dashboard', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin'); 
// Route::get('manager-dashboard', [HomeController::class, 'managerDashboard'])->name('manager.dashboard')->middleware('is_admin'); 
   

