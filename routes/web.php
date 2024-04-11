<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

//route for handling all operations
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');


Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');

Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');

Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');

//Hiii, Lets go to testing part of our application
