<?php

namespace App\Http\Controllers;

use App\Page;
use App\PageBlock;
use Illuminate\Http\Request;
use Pvtl\VoyagerPageBlocks\Traits\Blocks;

/**
 * Class PageController
 *
 * @package App\Http\Controllers
 */
class PageController extends Controller
{
    use Blocks;

    /**
     * @param $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($slug)
    {
        $page = Page::whereSlug($slug)->firstOrFail();

        $blocks = $page->blocks()
            ->where('is_hidden', '=', '0')
            ->orderBy('order', 'asc')
            ->get()
            ->map(function (PageBlock $block) {
                return (object)[
                    'id' => $block->id,
                    'page_id' => $block->page_id,
                    'updated_at' => $block->updated_at,
                    'cache_ttl' => $block->cache_ttl,
                    'template' => $block->template()->template,
                    'data' => $block->cachedData,
                    'path' => $block->path,
                    'type' => $block->type,
                ];
            });

        $page['body'] = view('voyager-page-blocks::default', [
            'page' => $page,
            'blocks' => $this->prepareEachBlock($blocks),
        ]);

        return view('page.view', ['page' => $page]);
    }
}
