<?php

namespace App\Http\Controllers;

use App\Page;
use App\PageBlock;
use Illuminate\Http\Request;

/**
 * Class PageController
 *
 * @package App\Http\Controllers
 */
class PageController extends Controller
{
    /**
     * @param $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($slug)
    {
        $page = Page::whereSlug($slug)->firstOrFail();

        return view('page.view', ['page' => $page]);
    }
}
