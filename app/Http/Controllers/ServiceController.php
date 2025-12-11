<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    //
    public function view($slug)
    {
        $contentMain = Service::where("slug",$slug)->first();
        if(!$contentMain) {
            abort(404);
        }
        $service_id = $contentMain->id;
        $utm_campaign = $contentMain->utm_campaign;
        $utm_source = $contentMain->utm_source;

        $template = ($contentMain->template)?$contentMain->template:'default-template';

        return view("services.".$template,compact('contentMain','service_id'));
    }
}
