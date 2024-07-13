<?php

namespace MoveMoveApp\DaData2\Objects;

use MoveMoveApp\DaData2\Objects\Address\Suggest;

/**
 * @property Suggest[] $suggestions
 */
class Postal extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Address\\PostalSuggest',
    ];
}
