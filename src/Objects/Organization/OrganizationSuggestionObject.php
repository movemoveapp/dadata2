<?php

namespace MoveMoveApp\DaData2\Objects\Organization;

use MoveMoveApp\DaData2\Objects\BaseObject;

class OrganizationSuggestionObject extends BaseObject
{

    public function relations(): array
    {
        return [
            'value',
            'unrestricted_value',
            'data'
        ];
    }
}
