<?php

namespace Acadea\Draftable;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Acadea\Draftable\Draftable
 */
class DraftableFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-draftable';
    }
}
