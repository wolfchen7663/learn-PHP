<?php
file_put_contents('cw.md', 'chenwei');// 这样的写入文件就像是 模式 w
file_put_contents('cw.md','world',FILE_APPEND); // 这样就是在后面添加，而不是覆盖

file_get_contents('cw.md'); //读取文件内容