<?php

/**
 * @file
 * A base exception class to handle TaxCloud exceptions
 */

namespace TaxCloud\Exceptions;

class BaseException extends \Exception
{
  // We want to require $message
  public function __construct(string $message, int $code = 0, ?\Exception $previous = null)
  {
    parent::__construct($message, $code, $previous);
  }
}
