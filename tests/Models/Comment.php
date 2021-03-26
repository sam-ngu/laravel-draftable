<?php


namespace Acadea\Draftable\Tests\Models;

use Acadea\Draftable\Traits\Draftable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    use Draftable;

    protected $fillable = [
        'title',
        'post_id',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
