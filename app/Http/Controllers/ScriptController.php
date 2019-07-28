<?php

namespace App\Http\Controllers;

use App\Popup;
use App\PopupSite;
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
        $schema = parse_url($referer, PHP_URL_SCHEME);
        $domain = parse_url($referer, PHP_URL_HOST);
        $url = "{$schema}://{$domain}";

        $popupSite = PopupSite::where(['domain' => $url])->first();

        if ($popupSite) {
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
    
    setTimeout(function() {
        init();
    },500);
} else {
    init();
}

function init(){
    var link = document.createElement('link');
    
    link.rel = "stylesheet";
    link.type = "text/css";
    link.href = "{$cssUrl}";
    link.crossOrigin = "anonymous";
    
    document.getElementsByTagName('head')[0].appendChild(link);
    
    var script = document.createElement('script');
    
    script.type = "text/javascript";
    script.src = "https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js";
    script.crossOrigin = "anonymous";
    
    document.getElementsByTagName('head')[0].appendChild(script);
    
    setTimeout(function() {
        var cookie = $.cookie('ep-popup-close');
            
        if (cookie === undefined) { 
            $(document).on('click', '.ep-popup-close', function() {
                $.cookie('ep-popup-close', 1);
                        
                var popup = $('.ep-popup');
                popup.fadeOut(500);
                setTimeout(function() {
                    popup.remove();
                }, 500);
            });
                    
            load();
        }
    }, 500);
}

function load()
{
        var cookie = $.cookie('ep-popup-close');
        
        if (cookie === undefined) { 
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
}

console.log('Init scripts complete');
JS;

            return (new Response($js, 200))->header('Content-type', 'application/javascript');
        } else {
            $js = <<<JS
console.log('Domain not register');
JS;

            return (new Response($js, 403))->header('Content-type', 'application/javascript');
        }
    }

    public function css(Request $request)
    {
        $apiKey = $request->get('apiKey');
        $referer = $request->headers->get('Referer');
        $schema = parse_url($referer, PHP_URL_SCHEME);
        $domain = parse_url($referer, PHP_URL_HOST);
        $url = "{$schema}://{$domain}";

        $popupSite = PopupSite::where(['domain' => $url])->first();

        if ($popupSite) {
            $closeBtn = url('/close-button.svg');

            $css = <<<CSS
.ep-popup {
    position: fixed;
    right: 25px;
    bottom: 25px;
    background: #ffffff;
    padding: 10px;
    border-radius:10px;
    box-shadow: 0 0 10px #000;
    display: none;
    max-width: 100%;
}
.ep-popup .ep-popup-content {
    display: flex;
    text-decoration: none;
    color: #000000;
    position: relative;
}
.ep-popup .ep-popup-content .ep-popup-icon {
    display: block;
    text-decoration: none;
    color: #000000;
    float: left;
    padding-right: 15px;
    max-height: 140px;
}
.ep-popup .ep-popup-content .ep-popup-icon img {
    max-height: 140px;
}
.ep-popup .ep-popup-content .ep-popup-message {
    display: block;
    text-decoration: none;
    color: #000000;
    float: right;
}
.ep-popup .ep-popup-close {
    top: -15px;
    right: -15px;
    width: 30px;
    height: 30px;
    border-radius: 30px;
    display: block;
    position: absolute;
    cursor: pointer;
    background: #ffffff;
}
.ep-popup .ep-popup-close i {
    width: 30px;
    height: 30px;
    display: block;
    background: url("{$closeBtn}") no-repeat center center;
}

@media only screen and (max-width: 1200px) {
    .ep-popup {
        right: 10px;
        top: 70px;
        bottom: auto;
        background: #ffffff;
        padding: 5px;
        padding-right: 15px;
        border-radius:5px;
        box-shadow: 0 0 5px #000;
        width: calc(100% - 40px);
        max-width: calc(100% - 40px);
    }
    .ep-popup .ep-popup-content .ep-popup-icon {
        padding-right: 10px;
        max-height: 65px;
    }
    .ep-popup .ep-popup-content .ep-popup-icon img {
        max-height: 65px;
    }
    .ep-popup .ep-popup-close {
        top: -5px;
        right: -5px;
        width: 10px;
        height: 10px;
        border-radius: 10px;
        display: block;
        position: absolute;
        cursor: pointer;
        background: #ffffff;
    }
    .ep-popup .ep-popup-close i {
        width: 10px;
        height: 10px;
        display: block;
        background: url("{$closeBtn}") no-repeat center center;
    }
}

@media only screen and (max-width: 768px) {
    .ep-popup {
        right: 10px;
        top: 10px;
        bottom: auto;
        background: #ffffff;
        padding: 5px;
        padding-right: 15px;
        border-radius:5px;
        box-shadow: 0 0 5px #000;
        width: calc(100% - 40px);
        max-width: calc(100% - 40px);
    }
    .ep-popup .ep-popup-content .ep-popup-icon {
        padding-right: 10px;
        max-height: 65px;
    }
    .ep-popup .ep-popup-content .ep-popup-icon img {
        max-height: 65px;
    }
    .ep-popup .ep-popup-close {
        top: -5px;
        right: -5px;
        width: 10px;
        height: 10px;
        border-radius: 10px;
        display: block;
        position: absolute;
        cursor: pointer;
        background: #ffffff;
    }
    .ep-popup .ep-popup-close i {
        width: 10px;
        height: 10px;
        display: block;
        background: url("{$closeBtn}") no-repeat center center;
    }
}
CSS;

            return (new Response($css, 200))->header('Content-type', 'text/css');
        } else {
            $js = <<<JS
console.log('Domain not register');
JS;

            return (new Response($js, 403))->header('Content-type', 'application/javascript');
        }
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function load(Request $request)
    {
        $apiKey = $request->get('apiKey');
        $referer = $request->headers->get('Referer');
        $schema = parse_url($referer, PHP_URL_SCHEME);
        $domain = parse_url($referer, PHP_URL_HOST);
        $url = "{$schema}://{$domain}";

        /** @var PopupSite $popupSite */
        $popupSite = PopupSite::where(['domain' => $url])->first();

        if ($popupSite) {
            /** @var Popup $popup */
            $popup = $popupSite->popups()->inRandomOrder()->first();

            if ($popup) {
                $html = <<<HTML
<div class="ep-popup">
    <a class="ep-popup-content" href="{$popup->link}" target="_blank">
        <div class="ep-popup-icon">
            <img src="{$popup->getImageSrc()}" alt="{$popup->message}"/>
        </div>
        <div class="ep-popup-message">
            {$popup->message}
        </div>
    </a>
    <div class="ep-popup-close">
        <i></i>
    </div>
</div>
HTML;
            } else {
                $html = '';
            }

            return (new Response($html, 200))->header('Content-type', 'text/html');
        } else {
            $js = <<<JS
console.log('Domain not register');
JS;

            return (new Response($js, 403))->header('Content-type', 'application/javascript');
        }
    }
}
