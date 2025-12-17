<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    private $leadData;
    public function view($slug,Request $request)
    {
        $contentMain = Business::where("slug",$slug)->first();
        if(!$contentMain) {
            abort(404);
        }

        $request->session()->put('business_id', $contentMain->id);

        $business_id = $contentMain->id;
        $category_id = $contentMain->category_id;
        $utm_campaign = $contentMain->utm_campaign;
        $utm_source = $contentMain->utm_source;

        $template = ($contentMain->template)?$contentMain->template:'default-template';

        return view("businesses.".$template,compact('contentMain','business_id'));
    }
}
