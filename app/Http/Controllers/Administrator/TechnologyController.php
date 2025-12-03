<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technology;
use App\Models\TechType;

class TechnologyController extends Controller
{
    public function index()
    {
        try {
            $technologies = Technology::all();
            return view('administrator.technologies.index',compact('technologies'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }

    public function add() {
        try {
            $techTypes = TechType::all();
            return view('administrator.technologies.add',compact('techTypes'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function show($id)
    {
        try {
            $technology = Technology::findorFail($id);
            $techTypes = TechType::all();
            return view('administrator.technologies.show',compact('technology','techTypes'));
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
           
            if($data['technology_id'] <= 0){
                Technology::create($data);
            } else {
                $institute = Technology::findOrFail($data['technology_id']);
                $institute->update($data);
            }
            return redirect()->back()->with('message', 'Technology updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        $course = Technology::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Technology deleted successfully!');
    }
}
