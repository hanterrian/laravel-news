<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
     * @return Response
     */
    public function get(Request $request)
    {
        $apiKey = $request->get('apiKey');
        $referer = $request->headers->get('Referer');

        $popupUrl = route('script-load');
        $cssUrl = route('script-css');

        $js = <<<JS
console.log('Init scripts');

if(!window.jQuery)
{
    console.log('jQuery not found? init it');
    
    var script = document.createElement('script');
    
    script.type = "text/javascript";
    script.src = "https://code.jquery.com/jquery-3.4.1.min.js";
    script.integrity = "sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=";
    script.crossOrigin = "anonymous";
    
    document.getElementsByTagName('head')[0].appendChild(script);
    
    var link = document.createElement('link');
    
    link.rel = "stylesheet";
    link.type = "text/css";
    link.href = "{$cssUrl}";
    link.crossOrigin = "anonymous";
    
    document.getElementsByTagName('head')[0].appendChild(link);
    
    setTimeout(function() {
        init();
    },500);
} else {
    init();
}

function init(){
   load();
}

function load()
{
     $.post('{$popupUrl}', function(responce) {
      $('body').append(responce);
      
      var popup = $('.ep-popup');
      
      popup.fadeIn(500);
      
      setTimeout(function() {
       popup.fadeOut(500);
      
       setTimeout(function() {
        popup.remove();
       
        load();
       }, 500);
      }, 10000);
    });
}

console.log('Init scripts complete');
JS;

        return (new Response($js, 200))->header('Content-type', 'application/javascript');
    }

    public function css(Request $request)
    {
        $css = <<<CSS
.ep-popup {
    position: absolute;
    right: 25px;
    bottom: 25px;
    background: #ffffff;
    padding: 10px;
    border-radius:10px;
    box-shadow: 0 0 10px #000;
    display: none;
}
.ep-popup .ep-popup-content {
    display: block;
    text-decoration: none;
    color: #000000;
}
.ep-popup .ep-popup-content .ep-popup-icon {
    display: block;
    text-decoration: none;
    color: #000000;
    float: left;
    padding-right: 15px;
    max-height: 120px;
}
.ep-popup .ep-popup-content .ep-popup-message {
    display: block;
    text-decoration: none;
    color: #000000;
    float: right;
}
CSS;

        return (new Response($css, 200))->header('Content-type', 'text/css');
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function load(Request $request)
    {
        $list = [
            [
                'type' => 'social',
                'icon' => url('/img/iconmonstr-telegram-1.svg'),
                'message' => 'Telegram link',
                'href' => 'https://telegram.org/',
            ],
            [
                'type' => 'popup',
                'icon' => url('/img/logotype.png'),
                'message' => 'Test link',
                'href' => url('/'),
            ],
            [
                'type' => 'popup',
                'icon' => url('/img/logotype.png'),
                'message' => 'Test link 2',
                'href' => url('/'),
            ],
        ];

        $key = array_rand($list);

        $item = (isset($list[$key])) ? $list[$key] : [];

        $html = <<<HTML
<div class="ep-popup">
    <a class="ep-popup-content" href="{$item['href']}" target="_blank">
        <div class="ep-popup-icon">
            <img src="{$item['icon']}" alt="{$item['message']}"/>
        </div>
        <div class="ep-popup-message">
            {$item['message']}
        </div>
    </a>
</div>
HTML;

        return (new Response($html, 200))->header('Content-type', 'text/html');
    }
}
