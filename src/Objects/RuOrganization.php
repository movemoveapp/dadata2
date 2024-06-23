<?php

namespace MoveMoveApp\DaData2\Objects;

use MoveMoveApp\DaData2\Objects\Organization\Ru\Suggestions;

/**
 * @property Suggestions[] $suggestions
 */
class RuOrganization extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Organization\\Ru\\Suggestions[]',
    ];
}
