<?php
abstract class handle
{
    final public function action()
    {
        var_dump($this->a());
        var_dump($this->b());
        var_dump($this->c());
    }

    protected abstract function a();

    protected abstract function b();

    private function c()
    {
        return __FUNCTION__;
    }
}

class handle1 extends handle
{
    protected function a()
    {
        return __CLASS__ . __FUNCTION__;
    }

    protected function b()
    {
        return __CLASS__ . __FUNCTION__;
    }
}

class handle2 extends handle
{
    protected function a()
    {
        return __CLASS__ . __FUNCTION__;
    }

    protected function b()
    {
        return __CLASS__ . __FUNCTION__;
    }
}


$handle1 = new handle1();

$handle2 = new handle2();

$handle1->action();
$handle2->action();

//it is so esay