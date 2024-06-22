<?php

namespace MoveMoveApp\DaData2\Objects;

use MoveMoveApp\DaData2\Objects\Organization\Suggestions;

/**
 * @property Suggestions[] $suggestions
 */
class DaDataSuggestionsOrganization extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Organization\\Suggestions[]',
    ];
}
