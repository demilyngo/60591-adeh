<?php

namespace Framework\Exceptions;

class UnauthorizedException extends \Exception
{
    public function __construct()
    {
        $this->message = 'Unauthorized exception';
        parent::__construct();
    }
}