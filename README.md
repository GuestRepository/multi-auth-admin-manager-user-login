Step-1		composer create-project --prefer-dist laravel/laravel multiAuthCrud

=================================================================================
Step-2		C:\xampp\htdocs\myproject\laravelAuthCrud\.env
---------
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test_authcrud
DB_USERNAME=root
DB_PASSWORD=

=================================================================================

Step-3		make database   test_authcrud

=================================================================================
Step-4		make middlewere which name  is_admin
			php artisan make:middleware IsAdmin  (run this command)
======================================================================================
Step-5		C:\xampp\htdocs\myproject\laravelAuthCrud\app\Http\Middleware\IsAdmin.php
		    
				
		public function handle($request, Closure $next)
		{
			if(auth()->user()->is_admin == 1){
				return $next($request);
			}else if(auth()->user()->is_admin == 2) {
				return $next($request);
			}
   
			return redirect('home')->with('error',"You don't have admin access.");
		}
========================================================================================

Step-6		C:\xampp\htdocs\myproject\laravelAuthCrud\app\Http\Kernel.php
			(write this code in kernel)
			
			protected $routeMiddleware = [
				 'is_admin' => \App\Http\Middleware\IsAdmin::class,
				 
			];
			
=========================================================================================
Step-7		C:\xampp\htdocs\myproject\laravelAuthCrud\app\Models\User.php
			
				protected $fillable = [
					'name', 'email', 'password', 'is_admin'
				];
==============================================================================================================================

Step-8		C:\xampp\htdocs\myproject\laravelAuthCrud\database\migrations\2014_10_12_000000_create_users_table.php
					
			public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_admin')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
===============================================================================================================================	

Step-9  	[ make a seeder for user faker data]
			php artisan make:seeder UserSeeder   (run  this command in your terminal)
			C:\xampp\htdocs\myproject\laravelAuthCrud\database\seeders\UserSeeder.php
			
			public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@gmail.com',
               'is_admin'=>1,
               'password'=> bcrypt('admin@gmail.com'),
            ],
            [
               'name'=>'Manager User',
               'email'=>'manager@gmail.com',
               'is_admin'=> 2,
               'password'=> bcrypt('manager@gmail.com'),
            ],
            [
               'name'=>'User',
               'email'=>'user@gmail.com',
               'is_admin'=>0,
               'password'=> bcrypt('user@gmail.com'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
	
===============================================================================================================================

Step-10 	make a folder inside resources\views  admin then make a file which is  adminHome.blade.php
			C:\xampp\htdocs\myproject\laravelAuthCrud\resources\views\admin\adminHome.blade.php
			
			-----------------------------------------------------------------------------------------
			
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

=================================================================================================================================
Step-11 		make a folder inside resources\views  manager then make a file which is  managerHome.blade.php
				C:\xampp\htdocs\myproject\laravelAuthCrud\resources\views\manager\managerHome.blade.php
				------------------------------------------------------------------------------------------
				
				@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
   
                <div class="card-body">
                    You are a Manager Dashboard.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
===================================================================================================================================
Step-12			C:\xampp\htdocs\myproject\laravelAuthCrud\resources\views\home.blade.php
				---------------------------------------------------------------------
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are normal user.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
=====================================================================================================================================

Step-13 		run this comand for auth login
				
				composer require laravel/ui
				php artisan ui vue --auth
				php artisan migrate
=====================================================================================================================================

Step-14      C:\xampp\htdocs\myproject\laravelAuthCrud\app\Http\Controllers\Auth\LoginController.php
				----copy all this code an page in loginController-----------
				
				---------------------------------------------------------------------------------------
				
				<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {   
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.home');
            }else if(auth()->user()->is_admin == 2) {
                return redirect()->route('manager.dashboard');
            }
            else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }
}

=============================================================================================================================
=============================================================================================================================

Step-15     make a HomeController then paste this code (php artisan make:controller HomeController)
				C:\xampp\htdocs\myproject\laravelAuthCrud\app\Http\Controllers\HomeController.php
				----------------------------------------------------------------------------------

			 public function index()
    {
        return view('home');  // this home page for user dashboard
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin.adminHome');
    }

    public function managerDashboard(){
        return view('manager.managerHome');
    }
========================================================================================================================================			
Step-16      C:\xampp\htdocs\myproject\laravelAuthCrud\routes\web.php

			use App\Http\Controllers\HomeController;
			use App\Http\Controllers\GuestController;
			
			
			
			Route::get('/',[GuestController::class, 'welcomePage'])->name('welcome'); 

Auth::routes();
  

Route::get('user-dashboard', [HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'is_admin:admin'])->group(function () {
    Route::get('/admin-dashboard', [HomeController::class, 'adminHome'])->name('admin.home');
});

Route::middleware(['auth', 'is_admin:manager'])->group(function () {
    Route::get('/manager-dashboard', [HomeController::class, 'managerDashboard'])->name('manager.dashboard');
});

// Route::get('admin-dashboard', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin'); 
// Route::get('manager-dashboard', [HomeController::class, 'managerDashboard'])->name('manager.dashboard')->middleware('is_admin'); 

============================================================================================================================================