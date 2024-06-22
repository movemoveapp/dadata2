<?php

namespace MoveMoveApp\DaData2\Objects\Organization;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property string $source
 * @property string $qc
 */
class GranularAddress extends BaseObject
{
    protected array $attributes = [
        'source'    => 'string|null',
        'qc'        => 'integer|null',
    ];
}
