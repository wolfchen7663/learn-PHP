<?php
class Father
{
    public function getName()
    {
    }
}
class Son extends Father
{
    public function setName()
    {
        return $this->getName();
    }
}

$son = new Son;
