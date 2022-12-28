<?php

namespace Magarrent\FaviconGenerator\Commands;

use Illuminate\Console\Command;

class FaviconGeneratorCommand extends Command
{
    public $signature = 'favicon-generator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
