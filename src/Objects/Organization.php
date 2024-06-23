<?php

namespace MoveMoveApp\DaData2\Objects;

use MoveMoveApp\DaData2\Objects\Organization\Ru\Suggestions;

/**
 * @property Suggestions[] $suggestions
 */
class Organization extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Organization\\Ru\\Suggestions[]',
    ];
}
