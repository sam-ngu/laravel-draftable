<?php


namespace Acadea\Draftable\Models;

use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
    protected $guarded = [ 'id', 'created_at', 'updated_at' ];

    protected $casts = [
        'payload' => 'array',
    ];


    // TODO: create magic method, any attr will refer to the props in 'payload' field

    public function draftable()
    {
        return $this->morphTo('draftable');
    }
}
