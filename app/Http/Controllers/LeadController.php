<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    //
    public function index(Request $request)
    {
        try {
            $search = ($request->has('search_query'))?$request->get('search_query'):"";
            return view("lead.search",compact('search'));

        } catch(\Illuminate\Database\QueryException $e){
            print_r($e); exit;
        }
    }

    public function capture(Request $request)
    {
        try {
            $data = $request->all();
            $data['unique_id'] = "127.0.0.1";
            Lead::create($data);
            return redirect("/services");

        } catch(\Illuminate\Database\QueryException $e){
            print_r($e); exit;
        }
    }
}
