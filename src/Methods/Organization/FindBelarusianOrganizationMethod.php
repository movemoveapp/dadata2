<?php

namespace MoveMoveApp\DaData2\Methods\Organization;


use GuzzleHttp\Client;
use MoveMoveApp\DaData2\Http\Router;
use MoveMoveApp\DaData2\Methods\BaseMethod;

/**
 * Directory of Organizations and Individual Entrepreneurs of Belarus.
 *
 *
 * @link https://dadata.ru/api/suggest/party_by/
 *
 * @property string     $query      Query text
 */
class FindBelarusianOrganizationMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'ByOrganization';
    protected array  $parameters    = [
        'query'         => 'string',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::findBelarusianOrganization();

        parent::__construct($client);
    }
}
