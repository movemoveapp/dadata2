<?php

namespace MoveMoveApp\DaData2\Objects;

use MoveMoveApp\DaData2\Objects\Organization\Kz\Suggestions;

/**
 * @property Suggestions[] $suggestions
 */
class KzOrganization extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Organization\\Kz\\Suggestions[]',
    ];
}
