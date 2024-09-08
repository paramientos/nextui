<?php

namespace Paramientos\NextUi\Commands;

use Illuminate\Console\Command;

class NextUiCommand extends Command
{
    public $signature = 'nextui';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
