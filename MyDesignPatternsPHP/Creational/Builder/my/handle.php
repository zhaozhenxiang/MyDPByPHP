<?php
interface builder
{
    public function create();
    public function createA();
    public function createB();

    public function result();
}

class car implements builder
{
    private $result = '';

    public function create()
    {
        $this->result .= __CLASS__ . __FUNCTION__;
    }

    public function createA()
    {
        $this->result .= __CLASS__ . __FUNCTION__;

    }

    public function createB()
    {
        $this->result .= __CLASS__ . __FUNCTION__;

    }

    public function result()
    {
        return $this->result;
    }
}

class car1 implements builder
{
    private $result = '';

    public function create()
    {
        $this->result .= __CLASS__ . __FUNCTION__;
    }

    public function createA()
    {
        $this->result .= __CLASS__ . __FUNCTION__;

    }

    public function createB()
    {
        $this->result .= __CLASS__ . __FUNCTION__;

    }

    public function result()
    {
        return $this->result;
    }
}

class director
{
    public function create(builder $builder)
    {
        $builder->createA();
        $builder->create();
        $builder->createB();

        return $builder->result();
    }
}

$director = new director();

var_dump($director->create(new car));
var_dump($director->create(new car1));