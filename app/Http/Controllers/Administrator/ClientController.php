<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //
    public function index()
    {
        try {
            $clients = Client::all();
            return view('administrator.clients.index',compact('clients'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }

    public function add() {
        try {
            return view('administrator.clients.add');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function show($id)
    {
        try {
            $client = Client::findorFail($id);
            return view('administrator.clients.show',compact('client'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'name' => 'required',
                'company_name' => 'required',
            ]);
           
            if($data['client_id'] <= 0){
                Client::create($data);
            } else {
                $client = Client::findOrFail($data['client_id']);
                $client->update($data);
            }
            return redirect()->back()->with('message', 'Client updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        $course = Client::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Client deleted successfully!');
    }
}
