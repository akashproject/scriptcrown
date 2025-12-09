<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
{
    //
    public function index(Request $request)
    {
        try {
            $result = [];           
            return view("lead.search",compact('result'));

        } catch(\Illuminate\Database\QueryException $e){
            print_r($e); exit;
        }
    }
}
