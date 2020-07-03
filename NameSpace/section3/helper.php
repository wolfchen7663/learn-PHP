<?php

namespace Helper;

function show()
{
    echo "function show";
}

define('NAME', 'chen'); // 始终是全局 不在乎命名空间
const AGE = 19; // 受到命名空间的限制
