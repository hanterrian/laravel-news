<?php

namespace App\Http\Controllers;

use App\Bank;

/**
 * Class ZaimController
 *
 * @package App\Http\Controllers
 */
class ZaimController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $models = Bank::all()->sortBy('position');

        return view('zaim.index', ['models' => $models]);
    }

    /**
     * @return string
     */
    public function manifest()
    {
        return "{\"name\": \"zaim.cijworld.com\",\"short_name\": \"zaim.cijworld.com\",\"start_url\": \"/\",\"display\": \"standalone\",\"gcm_sender_id\": \"800090532661\"}";
    }

    /**
     * @return string
     */
    public function serviceworker()
    {
        return "importScripts(\"https://zaimcijworldcom.push.world/https.serviceworker.js\");";
    }

    /**
     * @return string
     */
    public function serviceworkerUpdate()
    {
        return "importScripts(\"https://zaimcijworldcom.push.world/https.serviceworker.js\");";
    }
}
