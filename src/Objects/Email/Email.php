<?php

namespace MoveMoveApp\DaData2\Objects\Email;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property string|null    $local
 * @property string|null    $domain
 * @property string|null    $type
 * @property string|null    $source
 * @property string|null    $qc
 */
class Email extends BaseObject
{
    protected array $attributes = [
        'source'    => 'string|null',
        'email'     => 'string|null',
        'local'     => 'string|null',
        'domain'    => 'string|null',
        'type'      => 'string|null',
        'qc'        => 'string|null',
    ];
}
