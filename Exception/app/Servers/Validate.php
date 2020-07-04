<?php

namespace App\Servers;

use App\Exceptions\ValidateException;

class Validate
{
    public static function make()
    {
        if (empty($_POST["tittle"])) {
            throw new ValidateException("标题不能为空");
        } else {
            // 标题不为空
            $_SESSION["TITLE"] = $_POST["tittle"];
            include "Views/tittle.blade.php";
        }
    }
}
