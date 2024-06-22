<?php

namespace MoveMoveApp\DaData2\Objects\Organization;

use MoveMoveApp\DaData2\Objects\BaseObject;
use MoveMoveApp\DaData2\Objects\Document\Fts;
use MoveMoveApp\DaData2\Objects\Document\Pf;
use MoveMoveApp\DaData2\Objects\Document\Sif;
use MoveMoveApp\DaData2\Objects\Document\Smb;

/**
 * @property Fts $fts_registration
 * @property Fts $fts_report
 * @property Pf  $pf_registration
 * @property Sif $sif_registration
 * @property Smb $smb
 */
class Document extends BaseObject
{
    protected array $attributes = [
        'fts_registration'  => 'Document\\Fts',
        'fts_report'        => 'Document\\Fts',
        'pf_registration'   => 'Document\\Pf',
        'sif_registration'  => 'Document\\Sif',
        'smb'               => 'Document\\Smb',
    ];
}
