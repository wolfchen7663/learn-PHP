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
