<?php

namespace Domnokapp\FilamentTableRepeaterForm\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Domnokapp\FilamentTableRepeaterForm\FilamentTableRepeaterForm
 */
class FilamentTableRepeaterForm extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Domnokapp\FilamentTableRepeaterForm\FilamentTableRepeaterForm::class;
    }
}
