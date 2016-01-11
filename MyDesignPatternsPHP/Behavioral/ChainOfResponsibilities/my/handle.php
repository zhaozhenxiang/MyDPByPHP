<?php

abstract class handle
{
    protected $handleList = [];
    protected $handleCurrent = -1;

    public abstract function action(array $param);

    public function push($class)
    {
        array_push($this->handleList, $class);
    }
}

class handle1 extends handle
{
    public function action(array $param)
    {
        if (count($param) == 1) {
            var_dump(__CLASS__);
            var_dump($param);
        } else {
            $class = $this->handleList[++$this->handleCurrent];
            (new $class)->action($param);
        }
    }
}

class handle2 extends handle
{
    public function action(array $param)
    {
        if (count($param) == 2) {
            var_dump(__CLASS__);
            var_dump($param);
        } else {
            $class = $this->handleList[$this->handleCurrent++];
            (new $class)->action($param);
        }
    }
}


class handle3 extends handle
{
    public function action(array $param)
    {
        if (count($param) == 3) {
            var_dump(__CLASS__);
            var_dump($param);
        } else {
            $class = $this->handleList[$this->handleCurrent++];
            (new $class)->action($param);
        }
    }
}


//责任链的第一个处理handle一定会实例化的
//建立责任链链条
$handle1 = new handle1;
$handle1->push('handle2');
$handle1->push('handle3');

$handle1->action([1]);
$handle1->action([1, 2]);
$handle1->action([1, 2, 3]);

