<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;

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

Route::get("/admin_area/home", function () {
    $jobs = Job::all();
    return view("admin", [
        "jobs"=> $jobs  
    ]);
});


Route::get('/', function () {
    $jobs = Job::all();
    return view('home',
        ['jobs'=> $jobs]);  
});

Route::get('/job', function () {
    return view('job');   
});

Route::get('/login', function () {    
    return view('login');
});

Route::get('/register', function () {    
    return view('register');
});


Route::get('admin_area/login', function () {    
    return view('loginAdmin');
});


Route::get('admin_area/register', function () {    
    return view('registerAdmin');
});

Route::get('admin_area/new', function () {    
    return view('new');
});
Route::get('admin_area/edit/{job}', function(Job $job){
    return view("edit", ['job' => $job]);
});

Route::post('/sign_up', [userController::class, 'register']);
Route::post('/signin', [userController::class,'login']);
Route::post('/logout', [userController::class,'logout']);
Route::post('/new_gig', [adminController::class, 'new']);

Route::put('admin_area/edit/{job}', [adminController::class, 'editJob']);