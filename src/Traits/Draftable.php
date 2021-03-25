<?php


namespace Acadea\Draftable\Traits;


use Acadea\Draftable\Models\Draft;

trait Draftable
{


    public function drafts()
    {
        return $this->morphMany(Draft::class, 'draftable');
    }
}