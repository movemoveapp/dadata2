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
        'local'     => 'string|null',
        'domain'    => 'string|null',
        'type'      => 'string|null',
        'source'    => 'string|null',
        'qc'        => 'string|null',
    ];
}
