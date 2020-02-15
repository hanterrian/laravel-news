<?php

namespace App\Http\Controllers;

use App\Bank;

/**
 * Class KzCreditController
 *
 * @package App\Http\Controllers
 */
class KzCreditController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $models = Bank::where([
            'region' => Bank::REGION_KZ,
            'published' => 1
        ])->get()->sortBy('position');

        $model = Bank::where([
            'region' => Bank::REGION_KZ,
            'published' => 1
        ])->inRandomOrder()->first();

        return view('creditkz.index', [
            'model' => $model,
            'models' => $models
        ]);
    }

    /**
     * @return string
     */
    public function manifest()
    {
        return "";
    }

    /**
     * @return string
     */
    public function serviceworker()
    {
        return "";
    }

    /**
     * @return string
     */
    public function serviceworkerUpdate()
    {
        return "";
    }
}
