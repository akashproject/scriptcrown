<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        try {

            $courseType = Category::all();
            $listCategory = Category::all();
            return view('administrator.category.index',compact('courseType','listCategory'));

        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }

    public function show($id)
    {
        try {
            $courseType = Category::find($id);
            $listCategory = Category::all();

            return view('administrator.category.show',compact('courseType','listCategory'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'name' => 'required',
                'slug' => 'required',
                'status' => 'required',
            ]);
            if($data['category_id'] <= 0){
                Category::create($data);
            } else {
                $courseType = Category::findOrFail($data['category_id']);
                $courseType->update($data);
            }
            return redirect()->back()->with('message', 'Page updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    
    public function delete($id) {
        $course = Category::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Category updated successfully!');
    }
}
