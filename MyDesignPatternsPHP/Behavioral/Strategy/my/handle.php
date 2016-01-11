<?php
interface handle
{
    public function action($a, $b);
}

class handle1 implements handle
{
    public function action($a, $b)
    {
        return $a + $b;
    }
}

class handle2 implements handle
{
    public function action($a, $b)
    {
        return $a - $b;
    }
}

class action
{
    public function dosome(handle $handle, $a, $b)
    {
        return $handle->action($a, $b);
    }
}


$action = new action();

var_dump($action->dosome(new handle1(), 1231, 2131));

var_dump($action->dosome(new handle2(), 1231, 2131));

//it is so easy!
