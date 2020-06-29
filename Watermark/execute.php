<?php
include 'Water.php';
$water = new Water('water.png');
try {
    $water->make('origin.jpg', 'new.jpg', 7);
} catch (Exception $e) {
    echo $e->getMessage();
}
