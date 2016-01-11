<?php
interface factory
{
    public function createA();
    public function createB();
}

class factoryA implements factory
{
    public function createA()
    {
        return new TextA;
    }
    public function createB()
    {
        return new TextB;
    }
}

class factoryA1 implements factory
{
    public function createA()
    {
        return new TextA1;
    }
    public function createB()
    {
        return new TextB1;
    }
}

class action
{
    public function doAction()
    {
        return $this->name;
    }
}

class TextA extends action
{
    protected $name = __CLASS__;
}

class TextA1 extends action
{
    protected $name = __CLASS__;
}

class TextB extends action
{
    protected $name = __CLASS__;

}

class TextB1 extends action
{
    protected $name = __CLASS__;

}

$factory = new factoryA();
$actionA = $factory->createA();
$actionB = $factory->createB();
var_dump($actionA->doAction());
var_dump($actionB->doAction());

$factory1 = new factoryA1();
$actionA1 = $factory1->createA();
$actionB1 = $factory1->createB();
var_dump($actionA1->doAction());
var_dump($actionB1->doAction());
