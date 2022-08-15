<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

use Carbon\Carbon;


class TaskController extends Controller
{



    public function TaskView(){
        $tasks = Task::all();
        return view('task.view_task',compact('tasks'));
    }



// Task store
public function TaskStore(Request $request){

    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'duration' => 'required',

    ]);



        Task::insert([
            'name' => $request->name,
            'description' => $request->description,
            'duration' => $request->duration,

            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back();
   }




//    public function TaskEdit($id){
//     $employee_edit = Employee::find($id);
//     return view('employee.edit_employee',compact('employee_edit'));
// }



public function TaskDelete($id){
    $task_delete = Task::find($id)->delete();
    return redirect()->back();
}























}
