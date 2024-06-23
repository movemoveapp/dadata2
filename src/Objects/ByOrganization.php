<?php

namespace MoveMoveApp\DaData2\Objects;

use MoveMoveApp\DaData2\Objects\Organization\By\Suggest;

/**
 * @property Suggest[] $suggestions
 */
class ByOrganization extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Organization\\By\\Suggest[]',
    ];
}
