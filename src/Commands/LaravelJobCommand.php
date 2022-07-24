<?php

namespace Faisal50x\LaravelJob\Commands;

use Illuminate\Console\Command;

class LaravelJobCommand extends Command
{
    public $signature = 'laravel-job';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
