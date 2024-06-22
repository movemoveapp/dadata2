<?php

namespace MoveMoveApp\DaData2\Objects\Organization;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property int|null       $kpp
 * @property Capital        $capital
 * @property string         $invalid
 * @property Management     $management
 */
class OrganizationData extends BaseObject
{
    protected array $attributes = [
        'inn'               => 'integer|null',
        'kpp'               => 'integer|null',
        'ogrn'              => 'integer|null',
        'ogrn_date'         => 'string|null',
        'hid'               => 'string|null',
        'type'              => 'string',
        'okato'             => 'string|null',
        'oktmo'             => 'string|null',
        'okpo'              => 'string|null',
        'okogu'             => 'string|null',
        'okfs'              => 'string|null',
        'okved'             => 'string|null',
        'okved_type'        => 'string|null',
        'okveds'            => 'Organization\\Okveds',
        'branch_count'      => 'integer|null',
        'branch_type'       => 'string|null',
        'employee_count'    => 'integer|null',
        'finance'           => 'Organization\\Finance',
        'authorities'       => 'Organization\\Authorities',
        'citizenship'       => 'Organization\\Citizenship',
        'capital'           => 'Organization\\Capital',
        'invalid'           => 'boolean',
        'management'        => 'Organization\\Management'
    ];
}
