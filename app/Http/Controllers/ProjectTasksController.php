<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function update(Task $task)
    {
    	$task->complete(request()->has('completed'));
    	return back();
    }

    public function store(Project $project)	
    {
    	$validated=request()->validate(['description'=>'required|min:3']);
    	
    	$project->addTask($validated);

    	return back();
    }

}
