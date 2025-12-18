<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Technology;

class ServiceController extends Controller
{
    //
    private $leadData;
    public function view($slug,Request $request)
    {
        $contentMain = Service::where("slug",$slug)->first();
        if(!$contentMain) {
            abort(404);
        }

        $request->session()->put('serivce_id', $contentMain->id);
        $technologies = Technology::whereIn('id',json_decode($contentMain->technology_id))->get();

        $service_id = $contentMain->id;
        $category_id = $contentMain->category_id;
        $utm_campaign = $contentMain->utm_campaign;
        $utm_source = $contentMain->utm_source;

        $template = ($contentMain->template)?$contentMain->template:'default-template';

        return view("services.".$template,compact('contentMain','service_id','technologies'));
    }
}
