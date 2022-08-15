<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\TaskController;
use App\Http\Controllers\Backend\IssueController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\Employee_TaskController;
use App\Http\Controllers\Backend\Employee_TeamController;
use App\Http\Controllers\Backend\Issue_TeamController;
use App\Http\Controllers\Backend\DetailsController;


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


// Employee routes
Route::get('employee/show', [EmployeeController::class, 'EmployeeView'])->name('all.employee');
Route::post('employee/store', [EmployeeController::class, 'EmployeeStore'])->name('add.employee');
Route::get('employee/edit/{id}', [EmployeeController::class, 'EmployeeEdit'])->name('edit.employee');
Route::post('employee/update', [EmployeeController::class, 'EmployeeUpdate'])->name('update.employee');
Route::get('employee/delete/{id}', [EmployeeController::class, 'EmployeeDelete'])->name('delete.employee');


// Task routes
Route::get('task/show', [TaskController::class, 'TaskView'])->name('all.task');
Route::post('task/store', [TaskController::class, 'TaskStore'])->name('add.task');
 Route::get('task/edit/{id}', [TaskController::class, 'TaskEdit'])->name('edit.task');
// Route::post('employee/update', [EmployeeController::class, 'EmployeeUpdate'])->name('update.employee');
Route::get('task/delete/{id}', [TaskController::class, 'TaskDelete'])->name('delete.task');

////
Route::get('phones/phones', [IssueController::class, 'phones'])->name('all.issue');

// Issue routes
Route::get('issue/show', [IssueController::class, 'IssueView'])->name('all.issue');
Route::post('issue/store', [IssueController::class, 'IssueStore'])->name('add.issue');
Route::get('issue/delete/{id}', [IssueController::class, 'IssueDelete'])->name('delete.issue');


// Team routes
Route::get('team/show', [TeamController::class, 'TeamView'])->name('all.team');
Route::post('team/store', [TeamController::class, 'TeamStore'])->name('add.team');
Route::get('team/delete/{id}', [TeamController::class, 'TeamDelete'])->name('delete.team');


// Employe_Task routes
Route::get('employee_task/show', [Employee_TaskController::class, 'Employee_taskView'])->name('all.employee_task');
Route::post('employee_task/store', [Employee_TaskController::class, 'Employee_taskStore'])->name('add.employee_task');
Route::get('employee_task/delete/{id}', [Employee_TaskController::class, 'Employee_taskDelete'])->name('delete.employee_task');



// Details Show page
Route::get('details/show', [DetailsController::class, 'DetailsView'])->name('all.details');
Route::post('details/store', [DetailsController::class, 'DetailsStore'])->name('add.details');
// Route::get('employee_team/delete/{id}', [Employee_TeamController::class, 'Employee_teamDelete'])->name('delete.employee_team');


