<?php

namespace Iyngaran\Location\Commands;

use Illuminate\Console\Command;

class LocationCommand extends Command
{
    public $signature = 'laravel-locations';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
