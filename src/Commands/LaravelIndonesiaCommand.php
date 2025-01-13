<?php

namespace Itix\LaravelIndonesia\Commands;

use Illuminate\Console\Command;

class LaravelIndonesiaCommand extends Command
{
    public $signature = 'laravel-indonesia';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
