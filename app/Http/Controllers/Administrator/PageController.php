<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    //
    public function index()
    {
        try {
            $pages = Page::all();
            return view('administrator.pages.index',compact('pages'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }

    public function add() {
        try {
            return view('administrator.pages.add');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function show($id)
    {
        try {
            $page = Page::findorFail($id);
            return view('administrator.pages.show',compact('page'));
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
                'template' => 'required',
            ]);
           
            if($data['page_id'] <= 0){
                Page::create($data);
            } else {
                $institute = Page::findOrFail($data['page_id']);
                $institute->update($data);
            }
            return redirect()->back()->with('message', 'Page updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        $course = Page::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Page deleted successfully!');
    }
}
