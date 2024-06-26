<?php

namespace MoveMoveApp\DaData2\Objects\Organization\Ru;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property Code $code
 * @property Name $name
 */
class Citizenship extends BaseObject
{
    protected array $attributes = [
        'code' => 'Organization\\Ru\\Code',
        'name' => 'Organization\\Ru\\Name',
    ];
}
