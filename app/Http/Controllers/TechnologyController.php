<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technology;

class TechnologyController extends Controller
{
    //
    public function view($slug)
    {
        $contentMain = Technology::where("slug",$slug)->first();
        if(!$contentMain) {
            abort(404);
        }
        $contentMain->service_id = $contentMain->id;
        $utm_campaign = $contentMain->utm_campaign;
        $utm_source = $contentMain->utm_source;

        return view('techology.view',compact('contentMain'));
    }
}
