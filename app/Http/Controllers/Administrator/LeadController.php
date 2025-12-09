<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    public function index()
    {
        try {
            $leads = Lead::all();
            return view('administrator.leads.index',compact('leads'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }

    public function add() {
        try {
            return view('administrator.leads.add');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function show($id)
    {
        try {
            $lead = Lead::findorFail($id);
            return view('administrator.leads.show',compact('lead'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'unique_id' => 'required',
                'company_name' => 'required',
            ]);
           
            if($data['lead_id'] <= 0){
                Lead::create($data);
            } else {
                $lead = Lead::findOrFail($data['lead_id']);
                $lead->update($data);
            }
            return redirect()->back()->with('message', 'Lead updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        $course = Lead::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Lead deleted successfully!');
    }
}
