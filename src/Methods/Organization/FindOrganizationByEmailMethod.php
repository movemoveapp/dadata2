<?php

namespace MoveMoveApp\DaData2\Methods\Organization;


use GuzzleHttp\Client;
use MoveMoveApp\DaData2\Http\Router;
use MoveMoveApp\DaData2\Methods\BaseMethod;

/**
 * Finds the company by email address
 *
 *
 * @link https://dadata.ru/api/find-company/by-email/
 *
 * @property string     $query      Query text
 */
class FindOrganizationByEmailMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'OrganizationEmail';
    protected array  $parameters    = [
        'query'         => 'string',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::findOrganizationByEmail();

        parent::__construct($client);
    }
}
