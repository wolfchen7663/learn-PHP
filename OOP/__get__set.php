<?php
class Give
{
    protected $info = [];
    // public function __cw()
    // {
    //     echo 'i am name';
    // }
    public function __get($name)
    {
        if (method_exists($this, '__' . $name)) {
            return call_user_func_array([$this, '__' . $name], []);
        }
        if (isset($name) && $name == 'cw') {
            return $this->info[$name];
        }
    }
    public function __set($name, $value)
    {
        if ($value >= 90) {
            $this->info[$name] = $value;
            return $this->info;
        } else {
            throw new Exception('error value');
        }
    }
}
try {
    $give = new Give;
    $give->__set('cw', 0);
    echo $give->__get('cw');
} catch (Exception $e) {
    $error =  $e->getMessage();
    echo "<h2 style='color:red'>$error</h2>";
}
