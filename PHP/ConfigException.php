<?php
namespace League\OAuth2\Client\Provider;

class ConfigException extends \Exception
{
    /**
     * ConfigException constructor.
     * @param string $message the error message
     * @param int $code the error code
     */
    public function __construct($message = "", $code = 0)
    {
        parent::__construct($message, $code);
    }
}