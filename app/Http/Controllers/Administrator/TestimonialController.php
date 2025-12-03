<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    //
    public function index()
    {
        try {
            $testimonials = Testimonial::all();
            return view('administrator.testimonials.index',compact('testimonials'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }

    public function add() {
        try {
            return view('administrator.testimonials.add');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function show($id)
    {
        try {
            $testimonial = Testimonial::findorFail($id);
            return view('administrator.testimonials.show',compact('testimonial'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'rating' => 'required',
                'client_id' => 'required',
                'description' => 'required',
                'source' => 'required',
            ]);
           
            if($data['testimonial_id'] <= 0){
                Testimonial::create($data);
            } else {
                $institute = Testimonial::findOrFail($data['testimonial_id']);
                $institute->update($data);
            }
            return redirect()->back()->with('message', 'Testimonial updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        $course = Testimonial::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Testimonial deleted successfully!');
    }
}
