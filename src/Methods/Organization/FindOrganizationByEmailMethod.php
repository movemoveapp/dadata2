<?php

namespace MoveMoveApp\DaData2\Methods\Organization;


use GuzzleHttp\Client;
use MoveMoveApp\DaData2\Http\Router;
use MoveMoveApp\DaData2\Methods\BaseMethod;

/**
 * Finds a company or individual entrepreneur by Tax Identification Number (TIN) or Primary State Registration Number (PSRN).
 * Returns all available information about the company, unlike the organizationSuggestions method, which only returns basic fields.
 *
 * @link https://dadata.ru/api/find-party/
 */
class FindOrganizationByIdMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'Organization';
    protected array  $parameters    = [
        'query'         => 'string',
        'count'         => 'integer',
        'kpp'           => 'string',
        'branch_type'   => 'string',
        'type'          => 'string',
        'status'        => 'array',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::findOrganizationById();

        parent::__construct($client);
    }
}
