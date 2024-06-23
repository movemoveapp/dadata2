<?php

namespace MoveMoveApp\DaData2\Objects\Organization\Ru;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property string|null $numeric
 * @property string|null $alpha_3
 */
class Code extends BaseObject
{
    protected array $attributes = [
        'numeric'   => 'string|null',
        'alpha_3'   => 'string|null',
    ];
}
