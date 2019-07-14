<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class ScriptController
 *
 * @package App\Http\Controllers
 */
class ScriptController extends Controller
{
    /**
     * @param Request $request
     *
     * @return Response
     */
    public function get(Request $request)
    {
        $apiKey = $request->get('apiKey');
        $referer = $request->headers->get('Referer');

        $js = <<<JS
console.log('Init scripts');

if(!window.jQuery)
{
    console.log('jQuery not found? init it');
    
    var script = document.createElement('script');
    
    script.type = "text/javascript";
    script.src = "https://code.jquery.com/jquery-3.4.1.min.js";
    script.integrity = "sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=";
    script.crossOrigin = "anonymous";
    
    document.getElementsByTagName('head')[0].appendChild(script);
}

console.log('Init scripts complete');
JS;

        return (new Response($js, 200))->header('Content-type', 'application/javascript');
    }
}
