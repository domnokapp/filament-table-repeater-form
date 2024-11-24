<?php

namespace Domnokapp\FilamentTableRepeaterForm\Commands;

use Illuminate\Console\Command;

class FilamentTableRepeaterFormCommand extends Command
{
    public $signature = 'filament-table-repeater-form';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
