<?php


namespace Acadea\Draftable\Tests\Models;


use Acadea\Draftable\Traits\Draftable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Draftable;

    public function comments()
    {
        return $this->hasMany();
    }
}