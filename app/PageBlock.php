<?php

namespace App;

/**
 * App\PageBlock
 *
 * @property int $id
 * @property int $page_id
 * @property string $type
 * @property string $path
 * @property array $data
 * @property bool $is_hidden
 * @property bool $is_minimized
 * @property bool $is_delete_denied
 * @property int $cache_ttl
 * @property int $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $cached_data
 * @property-read \TCG\Voyager\Models\Page $page
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageBlock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageBlock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageBlock query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageBlock whereCacheTtl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageBlock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageBlock whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageBlock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageBlock whereIsDeleteDenied($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageBlock whereIsHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageBlock whereIsMinimized($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageBlock whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageBlock wherePageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageBlock wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageBlock whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageBlock whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PageBlock extends \Pvtl\VoyagerPageBlocks\PageBlock
{

}
