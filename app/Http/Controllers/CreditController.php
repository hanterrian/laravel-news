<?php

namespace App\Http\Controllers;

use App\Bank;

/**
 * Class CreditController
 *
 * @package App\Http\Controllers
 */
class CreditController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $models = Bank::where([
            'region' => Bank::REGION_MAIN,
            'published' => 1
        ])->get()->sortBy('position');

        $model = Bank::where([
            'region' => Bank::REGION_MAIN,
            'published' => 1
        ])->inRandomOrder()->first();

        return view('credit.index', [
            'model' => $model,
            'models' => $models
        ]);
    }

    /**
     * @return string
     */
    public function manifest()
    {
        return "{\"name\": \"credit.cijworld.com\",\"short_name\": \"credit.cijworld.com\",\"start_url\": \"/\",\"display\": \"standalone\",\"gcm_sender_id\": \"800090532661\"}";
    }

    /**
     * @return string
     */
    public function serviceworker()
    {
        return "importScripts(\"https://creditcijworldcom.push.world/https.serviceworker.js\");";
    }

    /**
     * @return string
     */
    public function serviceworkerUpdate()
    {
        return "importScripts(\"https://creditcijworldcom.push.world/https.serviceworker.js\");";
    }
}
