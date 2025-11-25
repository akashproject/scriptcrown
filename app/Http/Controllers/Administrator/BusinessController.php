<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    //
    public function index()
    {
        try {
            $businesses = Business::all();
            return view('administrator.businesses.index',compact('businesses'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }

    public function add() {
        try {
            return view('administrator.businesses.add');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function show($id)
    {
        try {
            $business = Business::findorFail($id);
            return view('administrator.businesses.show',compact('business'));
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
           
            if($data['business_id'] <= 0){
                Business::create($data);
            } else {
                $institute = Business::findOrFail($data['business_id']);
                $institute->update($data);
            }
            return redirect()->back()->with('message', 'Business updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        $course = Business::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Business deleted successfully!');
    }
}
