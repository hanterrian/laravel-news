<?php

namespace App\Http\Controllers;

use App\Bank;

/**
 * Class HomeController
 *
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $models = Bank::all()->sortBy('position');

        return view('home.index', ['models' => $models]);
    }
}
