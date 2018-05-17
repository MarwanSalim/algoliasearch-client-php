<?php

namespace Algolia\AlgoliaSearch\Exceptions;

use Throwable;

class RetriableException extends \RuntimeException
{
    public function __construct(string $message = '', int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}