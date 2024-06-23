<?php

namespace MoveMoveApp\DaData2\Objects\Organization\Ru;

use MoveMoveApp\DaData2\Objects\BaseObject;
use MoveMoveApp\DaData2\Objects\Email\Email;

/**
 * @property string|null $value
 * @property string|null $unrestricted_value
 * @property Email       $data
 */
class OrganizationEmail extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string|null',
        'unrestricted_value'    => 'string|null',
        'data'                  => 'Email\\Email'
    ];
}
