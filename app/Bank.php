<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\Translatable;

/**
 * App\Bank
 *
 * @property int                             $id
 * @property string                          $name
 * @property string|null                     $logo
 * @property string|null                     $sum
 * @property string|null                     $rate
 * @property string|null                     $term_from
 * @property string|null                     $term_to
 * @property string|null                     $description
 * @property int                             $link_type
 * @property string|null                     $link
 * @property int                             $position
 * @property string|null                     $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereLinkType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereSum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereTermFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereTermTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Bank extends Model
{
    use Translatable;
    use SoftDeletes;

    const TYPE_LINK = 0;

    /**
     * @return array
     */
    public static function getTypes()
    {
        return [
            self::TYPE_LINK => __('Link'),
        ];
    }

    protected $translatable = [
        'name',
        'description'
    ];

    public $fillable = [
        'name',
        'logo',
        'sum',
        'rate',
        'term_from',
        'term_to',
        'description',
        'link_type',
        'link',
        'position',
    ];

    protected $dates = ['deleted_at'];
}
