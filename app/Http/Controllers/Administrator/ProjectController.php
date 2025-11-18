<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    //
    public function index()
    {
        try {
            $projects = Project::all();
            return view('administrator.projects.index',compact('projects'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }

    public function add() {
        try {
            return view('administrator.projects.add');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function show($id)
    {
        try {
            $project = Project::findorFail($id);
            return view('administrator.projects.show',compact('project'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'title' => 'required',
                'slug' => 'required',
                'description' => 'required',
            ]);
           
            if($data['project_id'] <= 0){
                Project::create($data);
            } else {
                $institute = Project::findOrFail($data['project_id']);
                $institute->update($data);
            }
            return redirect()->back()->with('message', 'Project updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        $course = Project::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Project deleted successfully!');
    }
}
