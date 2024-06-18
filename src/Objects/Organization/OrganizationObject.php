<?php

namespace MoveMoveApp\DaData2\Objects\Organization;

use MoveMoveApp\DaData2\Objects\BaseObject;

class OrganizationObject extends BaseObject
{
    public function relations(): array
    {
        return [
            'suggestions'   => OrganizationSuggestionObject::class,
        ];
    }
}
