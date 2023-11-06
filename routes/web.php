<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\AulasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TarefasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubTarefaController;

//Route::resource('cursos', CursosController::class);
Route::resource('cursos', CursosController::class);
Route::resource('tarefas', TarefasController::class);
Route::resource('aulas', AulasController::class);
Route::resource('users', UserController::class);


//Route::get('site.home', [CursosController::class, 'index'])->name('curso.index');
Route::get('/', [AulasController::class, 'index'])->name('site.home');
Route::get('/tarefas', [TarefasController::class, 'index'])->name('site.tarefas');
Route::get('/aula', [AulasController::class, 'dois'])->name('site.aula');
Route::get('/aula/{slug}', [AulasController::class, 'unico'])->name('site.aula');
Route::get('/curso/{id}', [AulasController::class, 'curso'])->name('site.curso');

Route::view('/login', 'login.form')->name('login.form');
Route::post('/auth', [LoginController::class,'auth'])->name('login.auth');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard')->middleware('auth');
Route::get('/logout', [LoginController::class,'logout'])->name('login.logout');
Route::get('/register', [LoginController::class,'create'])->name('login.create');

Route::get('/admin/cursos', [CursosController::class, 'index2'])->name('admin.cursos')->middleware('auth');
Route::get('/admin/aulas', [AulasController::class, 'index2'])->name('admin.aulas')->middleware('auth');
Route::get('/admin/tarefas', [TarefasController::class, 'index2'])->name('admin.tarefas')->middleware('auth');
Route::get('/admin/subtarefas', [SubTarefaController::class, 'index2'])->name('admin.subtarefas')->middleware('auth');

Route::delete('/admin/aula/delete/{id}',[AulasController::class,'destroy'])->name('admin.aula.delete');
Route::delete('/admin/tarefa/delete/{id}',[TarefasController::class,'destroy'])->name('admin.tarefa.delete');
Route::delete('/admin/curso/delete/{id}',[CursosController::class,'destroy'])->name('admin.curso.delete');
Route::delete('/admin/subtarefa/delete/{id}',[SubTarefaController::class,'destroy'])->name('admin.subtarefa.delete');

Route::post('/admin/aula/store', [AulasController::class,'store'])->name('admin.aula.store');
Route::post('/admin/curso/store', [CursosController::class,'store'])->name('admin.curso.store');
Route::post('/admin/tarefa/store', [TarefasController::class,'store'])->name('admin.tarefa.store');
Route::post('/admin/subtarefa/store', [SubTarefaController::class,'store'])->name('admin.subtarefa.store');

 