<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\HomeArticle
 *
 * @property int $id
 * @property string $alias
 * @property string $key
 * @property string|null $title
 * @property string|null $content
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HomeArticleBlock[] $block
 * @property-read int|null $block_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticle query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticle whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticle whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticle whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticle whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticle whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticle whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class HomeArticle extends Model
{
    public function block()
    {
        return $this->hasMany(HomeArticleBlock::class,'home_article_id');
    }
}
