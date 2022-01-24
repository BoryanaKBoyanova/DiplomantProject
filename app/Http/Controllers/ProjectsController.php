<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        $project = Project::all();
        return view('show', compact('project'));
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
            $imageName = time().'.'.$request->image->extension();
            $file = $request->file('image')->move('images', $imageName);
            $project->image = $file;


        }
        else {
            return dd($request->all());
        }

        $project->save();

       return redirect('/show');
    }
    public function edit($id){
        $project = Project::find($id);

        return view('edit', compact('project'));
    }
    public function update(Request $request, $id){
        $project = Project::find($id);

        $project->topic = $request->topic;
        $project->professor = $request->professor;
        $project->description = $request->description;
        if ($request->hasFile('image'))
        {
            $imageName = time().'.'.$request->image->extension();
            $file = $request->file('image')->move('images', $imageName);
            $project->image = $file;
        }
        else {
            return $request;
        }
        $project->save();

        return redirect('/show');
    }

    public function delete($id){
        $project = Project::find($id);
        $project->delete();
        return redirect('/show');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $projects = Phone::where('topic', 'like','%'.$search.'%')
            ->orWhere('professor', 'like','%'.$search.'%')
            ->orWhere('description', 'like','%'.$search.'%')->get();
        return view('search', compact('projects'));
    }
}
