<?php
include 'Thumb.php';
$thumb = new Thumb;
try {
    $thumb->make('meat.jpg', 'test.jpg', 400, 300, 3);
} catch (Exception $e) {
    echo $e->getMessage();
}
