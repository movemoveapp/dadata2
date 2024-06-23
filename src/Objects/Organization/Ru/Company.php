<?php

namespace MoveMoveApp\DaData2\Objects\Organization\Ru;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property string|null $tax_system
 */
class Company extends BaseObject
{
    protected array $attributes = [
        'tax_system'    => 'string|null',
        'year'          => 'string|null',
        'income'        => 'string|null',
        'revenue'       => 'string|null',
        'expense'       => 'string|null',
        'debt'          => 'string|null',
        'penalty'       => 'string|null',
    ];
}
