<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return string
     */
    public function get(Request $request)
    {
        $apiKey = $request->get('apiKey');
        $referer = $request->headers->get('Referer');

        dump($referer);
        exit();
        $js = <<<JS
111
JS;

        return $js;
    }
}
