<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdcutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\CanvaController;
use App\Http\Controllers\Admin\AppliedJobsController;
  
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
  

 Route::get('/',[GuestController::class, 'welcomePage'])->name('welcome'); 
 Route::get('contact-page', [GuestController::class, 'contact'])->name('pages.contact');
 Route::get('candidate-page', [GuestController::class, 'candidates'])->name('pages.candidate');
 Route::get('browsejob-page', [GuestController::class, 'browsejob'])->name('pages.browsejob');
 Route::get('blog-page', [GuestController::class, 'blog'])->name('pages.blog');
 Route::get('new-post-page', [GuestController::class, 'newpost'])->name('pages.new.post');
 Route::get('job-post-page', [GuestController::class, 'jobpost'])->name('pages.job.post');
 
 Route::get('produt-page', [ProdcutController::class, 'index'])->name('product.index');


 Route::get('/logs', [LogController::class, 'index']);

 


 Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/


Route::get('user-dashboard', [HomeController::class, 'index'])->name('user.dashboard');
Route::get('user-dashboard/cv-build', [CanvaController::class, 'index'])->name('pages.cv.index');
Route::get('user-dashboard/profile-seeting', [CanvaController::class, 'profileCanva'])->name('user.profile.seeting');
Route::post('user-dashboard/profile-seeting/store', [CanvaController::class, 'profileCanvaStore'])->name('profile.store');

Route::get('user-dashboard/create-cv', [CanvaController::class, 'userCreateCv'])->name('user.create.cv');




Route::middleware(['auth', 'is_admin:admin'])->group(function () {
    Route::get('/admin-dashboard', [HomeController::class, 'adminHome'])->name('admin.home');

    // applied jobs 
    Route::get('/admin-applied-jobs', [AppliedJobsController::class, 'index'])->name('admin.applied.jobs.index');
    Route::get('/admin-applied-jobs-view/{course}', [AppliedJobsController::class, 'appliedView'])->name('applied.jobs.view');
    Route::get('/admin-applied-jobs-edit/{id}', [AppliedJobsController::class, 'appliedEdit'])->name('applied.jobs.edit');
    Route::post('/admin-applied-jobs-block/{id}', [AppliedJobsController::class, 'blockUser'])->name('block.user');
    Route::post('/admin-applied-jobs-unblock-user/{id}', [AppliedJobsController::class, 'unblockUser'])->name('unblockUser.user');
    Route::get('/admin-download-pdf/{id}', [AppliedJobsController::class, 'downloadPDF'])->name('download.pdf');

});

Route::middleware(['auth', 'is_admin:manager'])->group(function () {
    Route::get('/manager-dashboard', [HomeController::class, 'managerDashboard'])->name('manager.dashboard');
});

// Route::get('admin-dashboard', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin'); 
// Route::get('manager-dashboard', [HomeController::class, 'managerDashboard'])->name('manager.dashboard')->middleware('is_admin'); 
   

