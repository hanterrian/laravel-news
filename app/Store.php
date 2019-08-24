<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Store
 *
 * @property int                             $id
 * @property string|null                     $site
 * @property string|null                     $name
 * @property string|null                     $phone
 * @property string|null                     $country
 * @property string|null                     $comment
 * @property string|null                     $client_ip
 * @property string|null                     $user_agent
 * @property int|null                        $is_sended
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereClientIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereSite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereUserAgent($value)
 * @mixin \Eloquent
 */
class Store extends Model
{
    public $fillable = [
        'site',
        'name',
        'phone',
        'country',
        'comment',
        'client_ip',
        'user_agent',
        'is_sended',
    ];
}
