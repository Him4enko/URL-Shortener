<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\url_schema;

class RedirectController extends Controller
{
    public function redirect($end_link)
    {
        self::plus_redirect($end_link);
        return redirect(self::get_link($end_link));
    }

    public function get_link($link)
    {
        $db = new url_schema;
        $srlink = $db::where('end_link', env('APP_URL').'/'.$link)->first();
        return $srlink->source_link; 
    }
    
    public function plus_redirect($link){
        $db = new url_schema;
        $srlink = $db::where('end_link', env('APP_URL').'/'.$link)->first();
        $srlink->redirects += 1;
        $srlink->save();
    }
}
