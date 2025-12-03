<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TechType;

class TechTypeController extends Controller
{
    //
    public function index()
    {
        try {
            $techType = TechType::all();
            return view('administrator.techType.index',compact('techType'));

        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }

    public function show($id)
    {
        try {
            $techType = TechType::find($id);
            $techTypes = TechType::all();

            return view('administrator.techType.show',compact('techType','techTypes'));
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
            if($data['techType_id'] <= 0){
                TechType::create($data);
            } else {
                $techType = TechType::findOrFail($data['techType_id']);
                $techType->update($data);
            }
            return redirect()->back()->with('message', 'Page updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    
    public function delete($id) {
        $course = TechType::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'TechType updated successfully!');
    }
}
