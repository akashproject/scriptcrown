<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;

class CategoryController extends Controller
{
    //

    public function index($slug)
    {
        $contentMain = Category::where("slug",$slug)->first();
        if(!$contentMain) {
            abort(404);
        }
        $category_id = $contentMain->id;

        $services = Service::where('category_id',$contentMain->id)
                            ->where('featured_visibility',"1")->get();
                            
        $utm_campaign = $contentMain->utm_campaign;
        $utm_source = $contentMain->utm_source;

        $template = ($contentMain->template)?$contentMain->template:'default-template';

        return view("category.".$template,compact('contentMain','services','category_id'));
    }
}
