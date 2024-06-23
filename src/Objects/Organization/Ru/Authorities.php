<?php

namespace MoveMoveApp\DaData2\Objects\Organization\Ru;

use MoveMoveApp\DaData2\Objects\BaseObject;
use MoveMoveApp\DaData2\Objects\Document\Fts;
use MoveMoveApp\DaData2\Objects\Document\Pf;
use MoveMoveApp\DaData2\Objects\Document\Sif;

/**
 * @property string $authorities
 * @property Fts    $fts_registration
 * @property Fts    $fts_report
 * @property Pf     $pf
 * @property Sif    $sif
 */
class Authorities extends BaseObject
{
    protected array $attributes = [
        'authorities'       => 'string|null',
        'fts_registration'  => 'Document\\Fts',
        'fts_report'        => 'Document\\Fts',
        'pf'                => 'Document\\Pf',
        'sif'               => 'Document\\Sif',
    ];
}
