<?php
include 'engine.php';
session_set_save_handler(new Filehandle);
session_start();