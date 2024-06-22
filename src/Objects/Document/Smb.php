<?php

namespace MoveMoveApp\DaData2\Objects\Document;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property string|null $type
 * @property string|null $category
 * @property string|null $series
 * @property string|null $number
 * @property string|null $issue_date
 * @property string|null $issue_authority
 */
class Smb extends BaseObject
{
    protected array $attributes = [
        'type'              => 'string|null',
        'category'          => 'string|null',
        'series'            => 'string|null',
        'number'            => 'string|null',
        'issue_date'        => 'string|null',
        'issue_authority'   => 'string|null',
    ];
}
