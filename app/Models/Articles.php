<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\ArticleScope;

/**
 * App\Models\Articles
 *
 * @property int $id
 * @property string $key
 * @property string $title
 * @property string $content
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ArticleBlock[] $block
 * @property-read int|null $block_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereDeletedAt($value)
 * @property string|null $short_desc
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereShortDesc($value)
 */
class Articles extends Model
{
    public $table = 'articles';

    protected $fillable = [
        'key', 'title', 'content', 'image','article_type_id'
    ];

    protected $casts = [
        'date_start' => 'date',
        'date_end' => 'date',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function block()
    {
        return $this->hasMany(ArticleBlock::class,'article_id');
    }

    public function type()
    {
        return $this->belongsTo(ArticleType::class,'article_type_id');
    }
}
