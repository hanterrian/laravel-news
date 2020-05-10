<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

/**
 * App\Page
 *
 * @property int                                                                             $id
 * @property int                                                                             $author_id
 * @property string                                                                          $title
 * @property string|null                                                                     $excerpt
 * @property string|null                                                                     $body
 * @property string|null                                                                     $image
 * @property string                                                                          $slug
 * @property string|null                                                                     $meta_description
 * @property string                                                                          $status
 * @property \Illuminate\Support\Carbon|null                                                 $created_at
 * @property \Illuminate\Support\Carbon|null                                                 $updated_at
 * @property string|null                                                                     $layout
 * @property-read null                                                                       $translated
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Translation[] $translations
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page active()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereLayout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page whereTranslation($field, $operator, $value = null, $locales = null, $default = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page withTranslation($locale = null, $fallback = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page withTranslations($locales = null, $fallback = true)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\PageBlock[] $blocks
 * @property-read int|null $blocks_count
 * @property-read int|null $translations_count
 */
class Page extends Model
{
    use Translatable;

    protected $translatable = ['title', 'body'];

    /**
     * Statuses.
     */
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INACTIVE = 'INACTIVE';

    /**
     * List of statuses.
     *
     * @var array
     */
    public static $statuses = [self::STATUS_ACTIVE, self::STATUS_INACTIVE];

    protected $guarded = [];

    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->author_id && app('VoyagerAuth')->user()) {
            $this->author_id = app('VoyagerAuth')->user()->getKey();
        }

        parent::save();
    }

    /**
     * Scope a query to only include active pages.
     *
     * @param  $query  \Illuminate\Database\Eloquent\Builder
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', static::STATUS_ACTIVE);
    }

    // Add relation to page blocks
    public function blocks()
    {
        return $this->hasMany(PageBlock::class);
    }
}
