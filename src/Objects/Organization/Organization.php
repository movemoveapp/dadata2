<?php

namespace MoveMoveApp\DaData2\Objects\Organization;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property int|null       $kpp
 * @property Capital        $capital
 * @property string         $invalid
 * @property Management     $management
 * @property Citizenship    $citizenship
 */
class Organization extends BaseObject
{
    protected array $attributes = [
        'inn'               => 'integer|null',
        'kpp'               => 'integer|null',
        'ogrn'              => 'integer|null',
        'ogrn_date'         => 'string|null',
        'hid'               => 'string|null',
        'type'              => 'string',
        'name'              => 'Organization\\Name',
        'fio'               => 'Organization\\Fio',
        'okato'             => 'string|null',
        'oktmo'             => 'string|null',
        'okpo'              => 'string|null',
        'okogu'             => 'string|null',
        'okfs'              => 'string|null',
        'okved'             => 'string|null',
        'okved_type'        => 'string|null',
        'opf'               => 'Organization\\Opf',
        'okveds'            => 'Organization\\Okveds',
        'management'        => 'Organization\\Management',
        'branch_count'      => 'integer|null',
        'branch_type'       => 'string|null',
        'address'           => 'Organization\\Address',
        'state'             => 'Organization\\State',
        'employee_count'    => 'integer|null',
        'finance'           => 'Organization\\Finance',
        'authorities'       => 'Organization\\Authorities',
        'citizenship'       => 'Organization\\Citizenship',
        'founders'          => 'Organization\\Founder[]',
        'managers'          => 'Organization\\Manager[]',
        'predecessors'      => 'Organization\\Predecessor[]',
        'successors'        => 'Organization\\Successor[]',
        'capital'           => 'Organization\\Capital',
        'invalid'           => 'boolean',
        'documents'         => 'Organization\\Document',
        'licenses'          => 'Organization\\License[]',
        'phones'            => 'Organization\\OrganizationPhone[]',
        'emails'            => 'Organization\\OrganizationEmail[]',
    ];
}
