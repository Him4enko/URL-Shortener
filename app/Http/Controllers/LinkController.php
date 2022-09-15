<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use http\Cookie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\url_schema;

class LinkController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    /**
     * @return [object]
     */
    public function show() 
    {
        return view('index', ['title' => env('APP_NAME')]);
    }

    /**
     * @param mixed $a
     * 
     * @return [string]
     */
    public function link_id ($a)
    {
        $arr = array(
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 
            'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '_', '-',
        );

        $res = '';
        for ($i = 0; $i < $a; $i++) {
            $res .= $arr[random_int(0, count($arr)-1)];
        }
        return $res;
    }


    /**
     * @param Request $request
     * 
     * @return [object]
     */
    public function short(Request $request)
    {
        $id = self::link_id(5);
        $link = env('APP_URL').'/'.$id;
        self::add($request->source_link, $link, 0);
        return redirect("/stats/$id");
    }

    /**
     * @param mixed $s_link
     * @param mixed $e_link
     * @param mixed $red
     * 
     * @return [object]
     */
    public function add($s_link, $e_link, $red) 
    {
        $db = new url_schema();
        $db->source_link = $s_link;
        $db->end_link = $e_link;
        $db->redirects = $red;
        $db->save();
    }

}
