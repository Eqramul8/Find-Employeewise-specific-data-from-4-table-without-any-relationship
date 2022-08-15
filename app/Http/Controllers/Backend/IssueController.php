<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Issue;
use App\Models\Task;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

use Carbon\Carbon;


class IssueController extends Controller
{


    public function IssueView(){
        $issues = Issue::all();
        return view('issue.view_issue',compact('issues'));
    }





//Issue store
public function IssueStore(Request $request){

    $request->validate([
        'name' => 'required',
        'date' => 'required',

    ]);



        Issue::insert([
            'name' => $request->name,
            'date' => $request->date,

            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back();
   }




   public function IssueDelete($id){
    $issue_delete = Issue::find($id)->delete();
    return redirect()->back();

}



}
