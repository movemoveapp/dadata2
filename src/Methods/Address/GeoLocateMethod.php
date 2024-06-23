<?php

namespace MoveMoveApp\DaData2\Methods\Address;

use GuzzleHttp\Client;
use MoveMoveApp\DaData2\Http\Router;
use MoveMoveApp\DaData2\Methods\BaseMethod;

/**
 * Reverse geocoding
 *
 * Reverse geocoding (address by coordinates) has been implemented to find the nearest addresses (houses, streets, cities) based on geographic coordinates.
 *
 * @note: This service is available exclusively for Russia.
 *
 * @link https://dadata.ru/api/geolocate/
 *
 * @property string $lat
 * @property string $lon
 * @property string $count
 * @property string $radius_meters
 * @property array  $language
 */
class GeoLocateMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'Address';
    protected array  $parameters    = [
        'lat'               => 'float',
        'lon'               => 'float',
        'count'             => 'integer',
        'radius_meters'     => 'integer',
        'language'          => 'string',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::geoLocateAddress();

        parent::__construct($client);
    }
}
