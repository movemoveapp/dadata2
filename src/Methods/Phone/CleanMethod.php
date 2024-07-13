<?php

namespace MoveMoveApp\DaData2\Methods\Phone;

use GuzzleHttp\Client;
use MoveMoveApp\DaData2\Http\Router;
use MoveMoveApp\DaData2\Methods\BaseMethod;

/**
 * Phone Number Standardization
 * - Checks the phone number.
 * - Updates with the current city area code / DEF-code.
 * - Restores the carrier information, taking into account number portability between carriers.
 * - Identifies the country, region, city, and time zone.
 *
 * @note: This documentation is for developers. You can explore the region and carrier identification in the demo form, review usage scenarios, and connection options on the "Identify Region and Carrier by Phone Number" (https://dadata.ru/product/phone/) page.
 *
 * @link https://dadata.ru/api/clean/phone/
 * @property string $query
 */
class CleanMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'Phone\\Phone[]';
    protected array  $parameters    = [
        0 => 'array',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::cleanPhone();

        parent::__construct($client);
    }
}
