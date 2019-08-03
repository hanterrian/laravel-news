<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Popup
 *
 * @property int                             $id
 * @property int                             $site_id
 * @property string                          $type
 * @property string|null                     $image
 * @property string|null                     $message
 * @property string|null                     $link
 * @property string|null                     $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $place
 * @property string|null                     $image_1
 * @property string|null                     $text_1
 * @property string|null                     $url_1
 * @property string|null                     $image_2
 * @property string|null                     $text_2
 * @property string|null                     $url_2
 * @property string|null                     $image_3
 * @property string|null                     $text_3
 * @property string|null                     $url_3
 * @property string|null                     $width
 * @property string|null                     $height
 * @property string|null                     $html
 * @property-read \App\PopupSite             $site
 * @property-read \App\PopupSite             $siteId
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereImage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereImage2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereImage3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup wherePlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereSiteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereText1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereText2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereText3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereUrl1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereUrl2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereUrl3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereWidth($value)
 * @mixin \Eloquent
 */
class Popup extends Model
{
    protected $table = 'popup';

    const TYPE_POPUP = 'popup';
    const TYPE_BANNER = 'banner';
    const TYPE_BANNER3 = 'banner3';
    const TYPE_HTML = 'html';

    public $types = [
        self::TYPE_POPUP,
        self::TYPE_BANNER,
        self::TYPE_BANNER3,
        self::TYPE_HTML,
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function siteId()
    {
        return $this->belongsTo(PopupSite::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function site()
    {
        return $this->belongsTo('App\PopupSite', 'site_id');
    }

    /**
     * @return mixed|string
     */
    public function getImageSrc()
    {
        return \Voyager::image($this->image);
    }
}
