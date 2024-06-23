<?php

namespace MoveMoveApp\DaData2\Objects\Organization\Ru;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property string           $type
 * @property string           $value
 */
class Capital extends BaseObject
{
    protected array $attributes = [
        'type'  => 'string',
        'value' => 'string',
    ];
}
