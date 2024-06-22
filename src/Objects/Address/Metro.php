<?php

namespace MoveMoveApp\DaData2\Objects\Address;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property string|null $name
 * @property string|null $line
 * @property float|null  $distance
 */
class Metro extends BaseObject
{
    protected array $attributes = [
        'name'      => 'string|null',
        'line'      => 'string|null',
        'distance'  => 'float|null'
    ];
}
