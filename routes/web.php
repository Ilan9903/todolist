<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {return view('welcome');});


/* -- AUTH -- */

Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'auth'])->name('login.post');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


/* -- TASKS -- */

Route::get('tasks', [TaskController::class, 'index'])->name('tasks');
Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::patch('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::get ('tasks/completed/{task}', [TaskController::class, 'completed'])->name('tasks.completed');
Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');


/* -- PROFILE -- */

Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
Route::patch('password', [ProfileController::class, 'updatePassword'])->name('password.update');


/* -- PROJECTS -- */

Route::get('projects', [ProjectController::class, 'index'])->name('projects');
Route::get('projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::patch('projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
Route::delete('projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
Route::get('projects/completed/{project}', [ProjectController::class, 'completed'])->name('projects.completed');


/* -- ADMIN --*/

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('users', [AdminController::class, 'showUsers'])->name('users');
Route::get('tasks', [AdminController::class, 'showTasks'])->name('tasks');
Route::get('projects', [AdminController::class, 'showProjects'])->name('projects');
Route::get('users/create', [AdminController::class, 'createUser'])->name('users.create');
Route::post('users', [AdminController::class, 'storeUser'])->name('users.store');
Route::get('users/{user}', [AdminController::class, 'showUser'])->name('users.show');
Route::get('users/{user}/edit', [AdminController::class, 'editUser'])->name('users.edit');
Route::patch('users/{user}', [AdminController::class, 'updateUser'])->name('users.update');
Route::delete('users/{user}', [AdminController::class, 'destroyUser'])->name('users.destroy');

