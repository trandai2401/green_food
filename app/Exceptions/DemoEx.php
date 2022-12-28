<?php

namespace App\Exceptions;

use Exception;

class DemoEx extends Exception
{
    //
    public function render($request)
    {
        return response(['Message' => 'Sản phẩm này không còn tồn tại!'], 400);
    }
}
