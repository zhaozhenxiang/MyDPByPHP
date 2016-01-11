<?php

interface Command
{
    public function execute();
    public function undo();
}
interface Reciver
{
    public function action();
    public function unaction();
}

Class Command1 implements Command
{
    private $reciver;

    public function __construct(Reciver $reciver)
    {
        $this->reciver = $reciver;
    }

    public function execute()
    {
        $this->reciver->action();
    }

    public function undo()
    {
        $this->reciver->unaction();
    }
}

class Reciver1 implements Reciver
{
    public function action()
    {
        var_dump(__CLASS__ . __LINE__);
    }

    public function unaction()
    {
        var_dump(__CLASS__ . __LINE__);
    }

}

class Reciver2 implements Reciver
{
    public function action()
    {
        var_dump(__CLASS__ . __LINE__);
    }

    public function unaction()
    {
        var_dump(__CLASS__ . __LINE__);
    }
}

class Invoker
{
    private $command;

    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function action()
    {
        $this->command->execute();
    }

    public function unaction()
    {
        $this->command->undo();
    }
}

//生产接受者
$Reciver2 = new Reciver2();
$Reciver1 = new Reciver1();

//建立接受者和command之间关系
$command1 = new Command1($Reciver1);
$command2 = new Command1($Reciver2);

//生产调度者
$invoker1 = new Invoker($command1);
$invoker2 = new Invoker($command2);

//使用调度者
$invoker1->action();
$invoker1->unaction();

//使用调度者
$invoker2->action();
$invoker2->unaction();

