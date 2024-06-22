<?php

namespace App\Integrations\DaData\Objects;


use App\Integrations\DaData\Contracts\DaDataObject;
use App\Integrations\DaData\Objects\Organization\OrganizationObject;

/**
 * @property OrganizationObject[] $suggestions
 */
class DaDataOrganization extends DaDataObject
{
    protected array $attributes = [
        'suggestions' => 'Organization\\OrganizationObject[]',
    ];
}
