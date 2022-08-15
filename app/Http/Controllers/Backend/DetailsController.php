<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Task;
use App\Models\Issue;
use App\Models\Team;
use App\Models\Employee_Task;
use App\Models\Details;



class DetailsController extends Controller
{



//Issue store
public function DetailsStore(Request $request){

    $request->validate([

        'employee_id' => 'required',


    ]);

    $id = $request->employee_id;
    $employee = Employee_Task::where('employee_id', $id)->first();
    $emp = Employee::where('id', $employee->employee_id)->first();
    $task = Task::where('id', $employee->task_id)->first();
    $issue = Issue::where('id', $employee->issue_id)->first();
    $team = Team::where('id',  $employee->team_id)->first();
    // dd($task);
    return view ('show_emp_details', compact('emp', 'task', 'issue', 'team', 'employee'));




        return Redirect()->back();
   }






}
