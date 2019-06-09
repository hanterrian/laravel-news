<?php

namespace App\Http\Controllers;

use App\Bank;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $models = Bank::all()
            ->sortBy('position');

        return view('home.index', ['models' => $models]);
    }
}
