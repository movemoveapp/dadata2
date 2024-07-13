<?php

namespace MoveMoveApp\DaData2;

use MoveMoveApp\DaData2\Http\Router;
use MoveMoveApp\DaData2\Methods\Traits\HasAddressCleanerMethod;


class CleanerAddressApi extends Api
{
    use HasAddressCleanerMethod;

    public function __construct()
    {
        $this->baseUrl = Router::getCleanerUri();

        parent::__construct();
    }

}
