<?php

namespace App\Exceptions;

use Exception;

class AuthException extends Exception
{
    public function render($request)
    {
        return response(['message' => $this->message],  $this->code);
    }
}
