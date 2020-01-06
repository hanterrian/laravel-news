<?php

namespace App\Http\Controllers;

use App\Bank;

/**
 * Class RusCreditController
 *
 * @package App\Http\Controllers
 */
class RusCreditController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $models = Bank::whereRegion(Bank::REGION_RUS)->get()->sortBy('position');

        $model = Bank::whereRegion(Bank::REGION_RUS)->inRandomOrder()->first();

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
