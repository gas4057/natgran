<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\HomeArticleBlock
 *
 * @property int $id
 * @property int $home_article_id
 * @property string|null $title
 * @property string|null $desc
 * @property string|null $text_block
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\HomeArticle $article
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticleBlock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticleBlock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticleBlock query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticleBlock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticleBlock whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticleBlock whereHomeArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticleBlock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticleBlock whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticleBlock whereTextBlock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticleBlock whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeArticleBlock whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class HomeArticleBlock extends Model
{
    public function article()
    {
        return $this->belongsTo(HomeArticle::class,'home_article_id');
    }
}
