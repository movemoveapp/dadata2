<?php

namespace MoveMoveApp\DaData2\Objects\Organization;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property boolean    $main
 * @property string     $type
 * @property string     $code
 * @property string     $name
 */
class Okveds extends BaseObject
{
    protected array $attributes = [
        'main'  => 'bool',
        'type'  => 'string',
        'code'  => 'string',
        'name'  => 'string',
    ];
}
