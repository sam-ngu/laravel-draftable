<?php


namespace Acadea\Draftable\Tests\Models;

use Acadea\Draftable\Traits\Draftable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Draftable;
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'comment_tag', 'post_id', 'tag_id');
    }
}
