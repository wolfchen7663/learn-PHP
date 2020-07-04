<?php

namespace App\Exceptions;

use App\Servers\View;
use Exception;

class ViewException extends Exception
{
    public function render()
    {
        View::make("error", ['message' => $this->getMessage()]);
    }
}
