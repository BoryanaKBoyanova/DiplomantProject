<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('show', compact('projects'));
    }
    public function add(){
        return view('create');
    }
    public function create(Request $request){
        $this->validate($request, [
            'topic' => 'required',
            'professor' => 'required',
            'description' => 'required'
        ]);

        $project = new Project();
        $project->topic = $request->topic;
        $project->professor = $request->professor;
        $project->description = $request->description;

        if ($request->hasFile('image'))
        {

            $file = $request->file('image')->store('public');
            $project->image = $file;

            //$extension = $file->getClientOriginalExtension();
            //$fileName = $file . '.' . $extension;

            // $file->move('public/images/', $file);

            //var_dump($filePath);
            //die();
        }
        else {
            return dd($request->all());
        }

        $project->save();

       return redirect('/show');
    }
}
