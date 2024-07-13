<?php

namespace MoveMoveApp\DaData2;

use MoveMoveApp\DaData2\Http\Router;
use MoveMoveApp\DaData2\Methods\Traits\HasAddressCleanerMethod;
use MoveMoveApp\DaData2\Methods\Traits\HasPhoneCleanerMethod;


class CleanerPhoneApi extends Api
{
    use HasPhoneCleanerMethod;

    public function __construct()
    {
        $this->baseUrl = Router::getCleanerUri();

        parent::__construct();
    }

}
