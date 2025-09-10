<?php

namespace Roberts\LaravelFoundry\Commands;

use Illuminate\Console\Command;

class LaravelFoundryCommand extends Command
{
    public $signature = 'laravel-foundry';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
