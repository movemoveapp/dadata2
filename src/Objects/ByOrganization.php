<?php

namespace MoveMoveApp\DaData2\Objects;

use MoveMoveApp\DaData2\Objects\Organization\By\Suggestions;

/**
 * @property Suggestions[] $suggestions
 */
class ByOrganization extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Organization\\By\\Suggestions[]',
    ];
}