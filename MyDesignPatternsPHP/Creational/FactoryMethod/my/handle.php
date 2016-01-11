<?php
abstract class store
{
    public abstract function create($a);

    public function order($a)
    {
        $product = $this->create($a);
        return $product->action();
    }
}

class chinaStore extends store
{
    public function create($a)
    {
       switch ($a) {
           case 'yantai':
               return new yantai();
               break;
           case 'beijing':
               return new beijing();
               break;

       }
    }
}

class usStore extends store
{
    public function create($a)
    {
        switch ($a) {
            case 'ny':
                return new ny();
                break;
            case 'chicago':
                return new chicago();
                break;

        }
    }
}

abstract class area
{
    public abstract function action();
}

class yantai extends area
{
    public function action()
    {
        return __CLASS__;
    }
}

class beijing extends area
{
    public function action()
    {
        return __CLASS__;
    }
}

class ny extends area
{
    public function action()
    {
        return __CLASS__;
    }
}

class chicago extends area
{
    public function action()
    {
        return __CLASS__;
    }
}

$chinaStore = new chinaStore();

$yantai = $chinaStore->order('yantai');
$beijing = $chinaStore->order('beijing');
var_dump($yantai);
var_dump($beijing);


$usStore = new usStore();

$ny = $usStore->order('ny');
$chicago = $usStore->order('chicago');
var_dump($yantai);
var_dump($chicago);


#有点复杂