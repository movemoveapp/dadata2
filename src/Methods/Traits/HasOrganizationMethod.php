<?php

namespace MoveMoveApp\DaData2\Methods\Traits;

use Illuminate\Support\Str;
use MoveMoveApp\DaData2\Exceptions\DaDataMethodExceptions;

trait HasOrganizationMethod
{
    /**
     * @param string $method
     *
     * @return string
     * @throws DaDataMethodExceptions
     */
    protected function method(string $method): string
    {
        $method = Str::studly($method);

        if (class_exists($class = "MoveMoveApp\\DaData2\\Methods\\Organization\\{$method}Method")) {
            return $class;
        }

        throw DaDataMethodExceptions::methodNotFound($method);
    }
}
