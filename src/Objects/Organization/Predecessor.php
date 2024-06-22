<?php

namespace MoveMoveApp\DaData2\Objects\Organization;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property string|null $ogrn
 * @property string|null $inn
 * @property string|null $name
 */
class Predecessor extends BaseObject
{
    protected array $attributes = [
        'ogrn' => 'string|null',
        'inn'  => 'string|null',
        'name' => 'string|null',
    ];
}
