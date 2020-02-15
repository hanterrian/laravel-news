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
        $models = Bank::whereRegion(Bank::REGION_KZ)->get()->sortBy('position');

        $model = Bank::whereRegion(Bank::REGION_KZ)->inRandomOrder()->first();

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
