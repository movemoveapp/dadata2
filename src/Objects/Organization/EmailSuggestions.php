<?php

namespace MoveMoveApp\DaData2\Objects\Organization;

use MoveMoveApp\DaData2\Objects\BaseObject;
use MoveMoveApp\DaData2\Objects\Email\Email;

/**
 * @property Email $email
 * @property Company $company
 */
class EmailSuggestions extends BaseObject
{
    protected array $attributes = [
        'email'     => 'Email\\Email',
        'company'   => 'Organization\\Company',
    ];
}
