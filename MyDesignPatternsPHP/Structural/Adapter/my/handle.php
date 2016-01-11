<?php

interface handle1
{
    public function finish();
}

class user1 implements handle1
{
    public function start()
    {
        return __CLASS__ . __FUNCTION__;
    }

    public function finish()
    {
        return __CLASS__ . __FUNCTION__;
    }
}

class adapter implements handle1
{
    public function __construct(adapter1 $a)
    {
        $this->action = $a;
    }

    public function start()
    {
        return $this->action->startstart();
    }

    public function finish()
    {
        return $this->action->finishfinish();
    }
}

class adapter1
{
    public function startstart()
    {
        return __CLASS__ . __FUNCTION__;
    }
    public function finishfinish()
    {
        return __CLASS__ . __FUNCTION__;
    }
}

$user = new user1();
var_dump($user->start());
var_dump($user->finish());

$adapter = new adapter(new adapter1());

var_dump($adapter->start());
var_dump($adapter->finish());