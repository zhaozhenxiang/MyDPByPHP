<?php
interface informant {
    public function send($a);
}

class informant1 implements informant
{
    public function send($a)
    {
        echo __CLASS__ . $a;
    }
}

class informant2 implements informant
{
    public function send($a)
    {
        echo __CLASS__ . $a;
    }
}

class informant3 implements informant
{
    public function send($a)
    {
        echo __CLASS__ . $a;
    }
}

class ob
{
    private $list = [];
    private $msg = '';

    public function add(informant $in)
    {
        $this->list[] = $in;
    }

    public function setMessage($a)
    {
        $this->msg = $a;
    }

    public function action()
    {
        foreach ($this->list as $key => $item) {
            $item->send($this->msg);
        }
    }
}

$informant1 = new informant1();
$informant2 = new informant2();
$informant3 = new informant3();

$ob = new ob();

$ob->add($informant1);
$ob->add($informant2);
$ob->add($informant3);

$ob->setMessage(__LINE__);

$ob->action();