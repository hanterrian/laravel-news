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
JS;

        return (new Response($js, 200))->header('Content-type', 'application/javascript');
    }
}
