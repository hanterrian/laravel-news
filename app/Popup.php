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
 * @property-read \App\PopupSite             $site
 * @property-read \App\PopupSite             $siteId
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereSiteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Popup whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Popup extends Model
{
    protected $table = 'popup';

    const TYPE_POPUP = 'popup';

    public $types = [
        self::TYPE_POPUP,
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
