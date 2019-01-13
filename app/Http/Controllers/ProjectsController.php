<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
    	$projects=Project::all();    	
    	//return view('projects.index',compact('projects'));
    	return view('projects.index',['projects'=>$projects]);
    }

    public function paginate()
    {
        $projects=Project::orderBy("id","DESC")->paginate(2);    
        return response()->json($projects);
    }

    public function create()
    {
    	return view('projects.create');
    }

    public function show(Project $project)
    {
        //$project=Project::findOrFail($id);
        return view('projects.show',compact('project'));
    	
    }

    public function edit(Project $project)
    {
        //$project=Project::findOrFail($id);
    	return view('projects.edit',compact('project'));
    }

    public function update(Project $project)
    {
        //$project=Project::findOrFail($id);
        $project->update(request(['title','description']));
        // $project->title=request('title');
        // $project->description=request('description');
        // $project->save();
        return redirect('/projects');
    }
    
    public function destroy(Project $project)
    {
    	//Project::findOrFail($id)->delete();
        $project->delete();
        return redirect('/projects');   
    }

    public function store()
    {

        $validated=request()->validate([
            'title'=>['required','min:3'],
            'description'=>['required','min:3']             
        ]);

        Project::create($validated);
    	// $project=new Project();
    	// $project->title=request('title');
    	// $project->description=request('description');
    	// $project->save();
    	return redirect('/projects');
    }
}
