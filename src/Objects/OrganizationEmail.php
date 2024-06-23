<?php

namespace MoveMoveApp\DaData2\Objects;

use MoveMoveApp\DaData2\Objects\Organization\Ru\EmailSuggestions;

/**
 * @property EmailSuggestions
 */
class OrganizationEmail extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Organization\\Ru\\EmailSuggestions',
    ];
}
