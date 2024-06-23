<?php

namespace MoveMoveApp\DaData2\Http;

class Router
{
    /**
     * Get DaData API URL
     *
     * @return string
     */
    public static function getSuggestionsUrl(): string
    {
        return config('dadata.options.suggestions.url') ? config('dadata.options.suggestions.url') : 'https://suggestions.dadata.ru';
    }

    /**
     * Get DaData API Version
     *
     * @return string
     */
    public static function getSuggestionsVersion(): string
    {
        return config('dadata.options.suggestions.version') ? config('dadata.options.suggestions.version') : '4_1';
    }

    /**
     * Get URI to base resource
     *
     * @return string
     */
    public static function getSuggestionsUri(): string
    {
        $baseResource = config('dadata.options.suggestions.base_resource') ? config('dadata.options.suggestions.base_resource') : 'suggestions/api';

        return sprintf('%s/%s/%s/', self::getSuggestionsUrl(), $baseResource, self::getSuggestionsVersion());
    }

    /**
     * Get URI to suggest by address
     *
     * @return string
     */
    public static function suggestAddress(): string
    {
        return sprintf('%s/%s', self::getUri(), 'rs/suggest/address');
    }

    /**
     * @return string
     */
    public static function findOrganizationById(): string
    {
        return 'rs/findById/party';
    }

    /**
     * @return string
     */
    public static function findOrganizationByEmail(): string
    {
        return 'rs/findByEmail/company';
    }

    /**
     * @return string
     */
    public static function affiliatedOrganization(): string
    {
        return 'rs/findAffiliated/party';
    }

    /**
     * @return string
     */
    public static function suggestOrganization(): string
    {
        return 'rs/suggest/party';
    }

}
