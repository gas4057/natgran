<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ArticleBlock
 *
 * @property int $id
 * @property int|null $article_id
 * @property string|null $text_block
 * @property string|null $image_1
 * @property string|null $caption_1
 * @property string|null $image_2
 * @property string|null $caption_2
 * @property string|null $title
 * @property string|null $caption_text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Articles|null $article
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleBlock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleBlock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleBlock query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleBlock whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleBlock whereCaption1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleBlock whereCaption2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleBlock whereCaptionText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleBlock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleBlock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleBlock whereImage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleBlock whereImage2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleBlock whereTextBlock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleBlock whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleBlock whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ArticleBlock extends Model
{
    protected $table = 'article_blocks';
    protected $guarded = [];

    public function article()
    {
        return $this->belongsTo(Articles::class);
    }
}
