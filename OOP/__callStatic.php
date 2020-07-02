<?php
class Father
{
    public function __call($name, $arguments)
    {
        $action = 'getAttribute' . ucfirst($name);
        if (method_exists($this, $action)) {
            return  call_user_func_array([$this, $action], $arguments);
        }
    }
    public function all()
    {
        return 22;
    }
    public static function __callStatic($name, $arguments)
    {
        switch ($name) {
            case 'getAll':
                return call_user_func_array([new self(), 'all'], $arguments);
                break;
        }
    }
}
class Son extends Father
{
    protected function getAttributeMessage()
    {
        return "success";
    }
}

$child = new Son;
echo $child->message();
echo Son::getAll();
// print_r(Son::getAll());
