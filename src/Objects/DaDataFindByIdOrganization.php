<?php

namespace MoveMoveApp\DaData2\Objects;

use MoveMoveApp\DaData2\Objects\Organization\Suggestions;

/**
 * @property Suggestions[] $suggestions
 */
class DaDataFindByIdOrganization extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Organization\\Suggestions[]',
    ];
}
