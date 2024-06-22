<?php

namespace MoveMoveApp\DaData2\Methods;

use MoveMoveApp\DaData2\Exceptions\DaDataIntegrationException;
use MoveMoveApp\DaData2\Helpers\Type;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;

abstract class BaseMethod
{
    protected Client $client;

    /**
     * @param Client $client
     */
    public function __construct(Client &$client)
    {
        $this->client = $client;
    }

    /**
     * @param array $arguments
     *
     * @return mixed
     * @throws DaDataIntegrationException
     * @throws GuzzleException
     */
    public function __invoke(array $arguments = []): mixed
    {
        $arguments = Type::flattenArray($arguments, $this->parameters);

        try {
            $result = $this->client->request($this->method, $this->entryPoint, ['json' => $arguments]);

            // dd(json_decode($result->getBody()));

            return Type::cast(json_decode($result->getBody()), $this->expect);

        } catch (ClientException $exception) {
            $errorResponse = $exception->getResponse();
            $error         = json_decode($errorResponse->getBody());

            if ($error->message) {
                throw DaDataIntegrationException::externalDaDataApiError($error->message, $errorResponse->getStatusCode());
            }

            throw DaDataIntegrationException::undefinedDaDataApiError($errorResponse->getStatusCode());
        }
    }
}
