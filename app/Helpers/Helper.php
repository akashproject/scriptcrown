<?php

use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Facades\Agent;
use Illuminate\Support\Facades\Cache;
use Spatie\Permission\Models\Permission;
use App\Models\Setting;
if (! function_exists('check_device')) {
    function check_device($param = null){
        $device = "";
        switch ($param) {
            case 'desktop':
                $device = Agent::isDesktop();
                break;
            case 'tablet':
                $device = Agent::isTablet();
            case 'mobile':
                $device = Agent::isPhone();
                break;
            case 'os':
                $device = Agent::device();
                break;
        }
        
        return $device;
    }
}

if (! function_exists('getSizedImage')) {
    function getSizedImage($id,$size = '') {
        $size = ($size)?$size.'_':"";
        $media = DB::table('media')->where('id',$id)->first();
       
        if($media){
            $filename = env('APP_URL').$media->path.'/'.$size.$media->filename;
            return $filename;
        } else {
            return false;
        }
    }
}

if (! function_exists('getAttachmentUrl')) {
    function getAttachmentUrl($id) {
        $media = DB::table('media')->where('id',$id)->first();
        if($media){
            return $filename = env('APP_URL').$media->path.'/'.$media->filename;
        } else {
            return false;
        }
    }
}

if (! function_exists('thousandsCurrencyFormat')) {
    function thousandsCurrencyFormat($num) {
        if($num>1000) {
            $x = round($num);
            $x_number_format = number_format($x);
            $x_array = explode(',', $x_number_format);
            $x_parts = array('k', 'm', 'b', 't');
            $x_count_parts = count($x_array) - 1;
            $x_display = $x;
            $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
            $x_display .= $x_parts[$x_count_parts - 1];
            return $x_display;
        }
        return $num;
    }
}

if (! function_exists('get_theme_setting')) {
    function get_theme_setting($value){
        $media = Setting::where('key',$value)->first();
        return (isset($media->value))?$media->value:"null";
    }
}

if (! function_exists('getUtmCampaign')) {
    function getUtmCampaign($params = null){
        if(request()->has('utm_campaign')){
            return request()->get('utm_campaign');
        }
        return ($params)?$params:get_theme_setting('utm_campaign');
    }
}

if (! function_exists('getUtmSource')) {
    function getUtmSource($params = null){
        if(request()->has('utm_source')){
            return request()->get('utm_source');
        }
        return ($params)?$params:get_theme_setting('utm_source');
    }
}

if (! function_exists('getCommunicationMedium')) {
    function getCommunicationMedium($params = null){
        if(request()->has('lead_type')){
            return request()->get('lead_type');
        }
        return ($params)?$params:get_theme_setting('lead_type');
    }
}
