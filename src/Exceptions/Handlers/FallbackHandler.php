<?php

namespace Gravure\Api\Exceptions\Handlers;

use Exception;
use Gravure\Api\Contracts\ExceptionHandler;
use Tobscure\JsonApi\Exception\Handler\ResponseBag;

class FallbackHandler extends AbstractHandler implements ExceptionHandler
{

    /**
     * If the exception handler is able to format a response for the provided exception,
     * then the implementation should return true.
     *
     * @param Exception $e
     * @return bool
     */
    public function manages(Exception $e)
    {
        return true;
    }

    /**
     * Handle the provided exception.
     *
     * @param Exception $e
     * @return ResponseBag
     */
    public function handle(Exception $e)
    {
        if ($this->debug) {
            return [(string)$e];
        }

        return null;
    }
}
