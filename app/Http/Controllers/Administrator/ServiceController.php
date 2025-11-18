<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;

class ServiceController extends Controller
{
    //
    public function index()
    {
        try {
            $services = Service::all();
            return view('administrator.services.index',compact('services'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function add() {
        $categories = Category::all();
        return view('administrator.services.add',compact('categories'));
    }

    public function show($id)
    {
        try {
            $categories = Category::all();
            $service = Service::find($id);
            $service->faqs = json_decode($service->faqs);
            return view('administrator.services.show',compact('service','categories'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'name' => 'required',
                'slug' => 'required',
            ]);
            $data['subjects'] = isset($data['subjects'])?json_encode($data['subjects']):null;
            if($data['service_id'] <= 0){
                $service = Service::create($data);
            } else {
                $service = Service::findOrFail($data['service_id']);
                $service->update($data);
            }

            return redirect()->back()->with('message', 'Service updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->back()->with('message', 'Service deleted successfully!');
    }
}
