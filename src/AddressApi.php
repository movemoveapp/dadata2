<?php

namespace MoveMoveApp\DaData2;

use MoveMoveApp\DaData2\Http\Router;
use MoveMoveApp\DaData2\Methods\Traits\HasAddressMethod;
use MoveMoveApp\DaData2\Methods\Traits\HasOrganizationMethod;


class AddressApi extends Api
{
    use HasAddressMethod;

    public function __construct()
    {
        $this->baseUrl = Router::getSuggestionsUri();

        parent::__construct();
    }

}
