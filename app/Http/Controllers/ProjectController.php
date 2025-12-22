<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Technology;
use App\Models\Project;

class ProjectController extends Controller
{
    //
    private $leadData;
    public function view($slug,Request $request)
    {
        $contentMain = Project::where("slug",$slug)->first();
        if(!$contentMain) {
            abort(404);
        }
        $request->session()->put('serivce_id', $contentMain->service_id);
        $technologies = ($contentMain->technology_id != null)? Technology::whereIn('id',json_decode($contentMain->technology_id))->get() : [];
        $utm_campaign = $contentMain->utm_campaign;
        $utm_source = $contentMain->utm_source;

        return view("projects.default-template",compact('contentMain','technologies'));
    }
}
