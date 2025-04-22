<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PdfController;

// Public routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/info', function () {
    return view('info');
})->name('info');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Admin routes
Route::middleware(['auth'])->group(function () {
    // Admin dashboard
    Route::get('/admin/dashboard', [AuthController::class, 'adminDashboard'])
        ->middleware('auth')
        ->name('admin.dashboard');
    
    // User management (admin only)
    Route::get('/users', [UserController::class, 'index'])
        ->middleware('auth')
        ->name('users.index');
    
    Route::get('/users/create', [UserController::class, 'create'])
        ->middleware('auth')
        ->name('users.create');
    
    Route::post('/users', [UserController::class, 'store'])
        ->middleware('auth')
        ->name('users.store');
    
    Route::delete('/users/{user}', [UserController::class, 'destroy'])
        ->middleware('auth')
        ->name('users.destroy');
    
    // Department management
    Route::get('/departaments', [DepartamentController::class, 'index'])
        ->name('departaments.index');
    
    Route::get('/departaments/create', [DepartamentController::class, 'create'])
        ->middleware('auth')
        ->name('departaments.create');
    
    Route::post('/departaments', [DepartamentController::class, 'store'])
        ->middleware('auth')
        ->name('departaments.store');
    
    Route::get('/departaments/{departament}', [DepartamentController::class, 'show'])
        ->name('departaments.show');
    
    Route::get('/departaments/{departament}/edit', [DepartamentController::class, 'edit'])
        ->middleware('auth')
        ->name('departaments.edit');
    
    Route::put('/departaments/{departament}', [DepartamentController::class, 'update'])
        ->middleware('auth')
        ->name('departaments.update');
    
    Route::delete('/departaments/{departament}', [DepartamentController::class, 'destroy'])
        ->middleware('auth')
        ->name('departaments.destroy');
    
    // Professor management
    Route::get('/professors', [ProfessorController::class, 'index'])
        ->name('professors.index');
    
    Route::get('/professors/create', [ProfessorController::class, 'create'])
        ->middleware('auth')
        ->name('professors.create');
    
    Route::post('/professors', [ProfessorController::class, 'store'])
        ->middleware('auth')
        ->name('professors.store');
    
    Route::get('/professors/{professor}', [ProfessorController::class, 'show'])
        ->name('professors.show');
    
    Route::get('/professors/{professor}/edit', [ProfessorController::class, 'edit'])
        ->middleware('auth')
        ->name('professors.edit');
    
    Route::put('/professors/{professor}', [ProfessorController::class, 'update'])
        ->middleware('auth')
        ->name('professors.update');
    
    Route::delete('/professors/{professor}', [ProfessorController::class, 'destroy'])
        ->middleware('auth')
        ->name('professors.destroy');
    
    // Consultor dashboard
    Route::get('/consultor/dashboard', [AuthController::class, 'consultorDashboard'])
        ->name('consultor.dashboard');
    
    // PDF routes
    Route::get('/pdf/departaments', [PdfController::class, 'departamentsList'])
        ->name('pdf.departaments');
    
    Route::get('/pdf/departaments/{departament}', [PdfController::class, 'departamentDetail'])
        ->name('pdf.departament.detail');
    
    Route::get('/pdf/professors', [PdfController::class, 'professorsList'])
        ->name('pdf.professors');
    
    Route::get('/pdf/professors/{professor}', [PdfController::class, 'professorDetail'])
        ->name('pdf.professor.detail');
});
