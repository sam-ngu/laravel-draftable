<?php

namespace Acadea\Draftable\Commands;

use Illuminate\Console\Command;

class DraftableCommand extends Command
{
    public $signature = 'laravel-draftable';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
