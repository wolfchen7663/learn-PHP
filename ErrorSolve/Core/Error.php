<?php

namespace Core;

date_default_timezone_set("PRC");
class Error
{
    protected $debug;
    public function __construct($debug = true)
    {
        $this->debug = $debug;
    }
    public function error()
    {
        error_reporting(0);
        set_error_handler([$this, 'handle'], E_ALL | E_STRICT);
    }
    public function handle($code, $error, $file, $line)
    {
        $msg = "The error is: " . $error . "<br/>" . "The error code is: " . "($code)"
            . '<br/>' . "The error file is: " . $file
            . '<br/>' . "The error line is " . "($line)";
        switch ($code) {
            case E_NOTICE:
                if ($this->debug) {
                    include 'Views/notice.php';
                }
                break;
            default:
                if ($this->debug) {
                    include 'Views/notice.php';
                } else {
                    //使用日志保存
                    $file = 'logs/' . date("Y_m_d") . '.log';
                    error_log(date('[c]') . $msg . PHP_EOL, 3, $file);
                }
                break;
        }
    }
}
