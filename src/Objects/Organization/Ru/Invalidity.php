<?php

namespace MoveMoveApp\DaData2\Objects\Organization\Ru;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property string|null $code
 * @property Decision    $decision
 */
class Invalidity extends BaseObject
{
    protected array $attributes = [
        'code'      => 'string|null',
        'decision'  => 'Organization\\Ru\\Decision',
    ];
}
