<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\PopupSite
 *
 * @property int                                                        $id
 * @property string                                                     $name
 * @property string                                                     $domain
 * @property string|null                                                $deleted_at
 * @property \Illuminate\Support\Carbon|null                            $created_at
 * @property \Illuminate\Support\Carbon|null                            $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Popup[] $popups
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PopupSite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PopupSite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PopupSite query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PopupSite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PopupSite whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PopupSite whereDomain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PopupSite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PopupSite whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PopupSite whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read int|null $popups_count
 */
class PopupSite extends Model
{
    protected $table = 'popup_site';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function popups()
    {
        return $this->hasMany(Popup::class, 'site_id');
    }
}
