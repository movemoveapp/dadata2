<?php

namespace MoveMoveApp\DaData2\Objects\Organization;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property string|null $name
 * @property string|null $post
 * @property string|null $disqualified
 */
class Management extends BaseObject
{
    protected array $attributes = [
        'name'          => 'string|null',
        'post'          => 'string|null',
        'disqualified'  => 'string|null',
    ];
}
