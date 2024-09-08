<?php

namespace Paramientos\NextUi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Paramientos\NextUi\NextUi
 */
class NextUi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Paramientos\NextUi\NextUi::class;
    }
}
