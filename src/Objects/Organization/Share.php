<?php

namespace MoveMoveApp\DaData2\Objects\Organization;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property string|null $type
 * @property string|null $value
 * @property string|null $numerator
 * @property string|null $denominator
 */
class Share extends BaseObject
{
    protected array $attributes = [
        'type'          => 'string|null',
        'value'         => 'string|null',
        'numerator'     => 'string|null',
        'denominator'   => 'string|null',
    ];
}
