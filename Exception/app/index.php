<?php

use App\Exceptions\ValidateException;
use App\Exceptions\ViewException;
use App\Servers\View;

include "bootstrap.php";
View::make("index");
// View::make("error");
// throw new ViewException("This is view error");
