<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\url_schema;

class StatsController extends Controller
{
    /**
     * @param mixed $id
     * 
     * @return [type]
     */
    public function getstat($id)
    { 
        return view('stats', ['title' => env('APP_NAME'), 
                              'url' => env('APP_URL').'/'.$id,
                              'url_stats' => env('APP_URL').'/stats/'.$id,
                              'redirects' => self::get_redirects($id),
                              'asset' => env('APP_URL')]);
    }

    /**
     * @param mixed $link
     * 
     * @return [type]
     */
    public function get_redirects($link)
    {
        $db = new url_schema;
        $srlink = $db::where('end_link', env('APP_URL').'/'.$link)->first();
        return $srlink->redirects; 
    }

    /**
     * @param mixed $link
     * 
     * @return [type]
     */
    public function get_link_stats($link)
    {
        $db = new url_schema;
        $srlink = $db::where('end_link', env('APP_URL').'/'.$link)->first();
        return $srlink->redirects; 
    }
}
